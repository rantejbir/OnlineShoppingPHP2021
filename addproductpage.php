<?php
include("connection.php");

//ob_start();
session_start();

if (!isset($_SESSION['ADMINEMAIL'])) {
    header("Location:adminlogin.php");
}

$qr = "select * from categorytable";
$res = mysqli_query($con,$qr);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php") ?>
</head>
<body>
<?php include("adminheader.php") ?>
<div class="container">
    <form method="post" action="addproductaction.php" enctype="multipart/form-data">
        <div class="col-md-12 col-12 m-5">
            <h1 class="text-center text-success">NEW PRODUCT</h1>
            <div class="col-md-8 col-8 offset-2">
                <label>Select Category</label>
                <select name="categoryid" class="form-control" onchange="getSubCategories(this.value)">
                    <option value="">-- Select --</option>
                    <?php
                    while($row = mysqli_fetch_array($res)){
                        echo "<option value='".$row['categoryid']."'>".$row['categoryname']."</option>";
                    }
                    ?>
                </select>
                <label>Select Sub Category</label>
                <select name="subcatid" id="subcatid" class="form-control">

                </select>
                <label>Enter Product Name</label>
                <input type="text" name="productname" class="form-control">
                <label>Select Photo</label>
                <input type="file" name="photo" class="form-control">
                <div class="row">
                    <div class="col-md-4 col-4">
                        <label>Enter MRP</label>
                        <input type="text" name="mrp" onkeyup="calculatePrice()" id="mrp" value="0" class="form-control">
                    </div>
                    <div class="col-md-4 col-4">
                        <label>Enter Discount(%)</label>
                        <input type="text" name="discount" onkeyup="calculatePrice()" id="discount" value="0" class="form-control">
                    </div>
                    <div class="col-md-4 col-4">
                        <label>Enter Price</label>
                        <input type="text" readonly name="price" id="price" class="form-control">
                    </div>
                </div>
                <label>Enter Description</label>
                <textarea class="form-control" name="productdescription"></textarea>
                <button type="submit" class="btn btn-success mt-2">Submit</button>
            </div>
        </div>
    </form>
    <div class="text-center">
        <?php
        if(isset($_GET['err'])){
            if($_GET['err']==1){
                echo "<alert class='alert alert-success'>Product added Successfully</alert>";
            }elseif ($_GET['err']==2){
                echo "<alert class='alert alert-danger'>Product not added</alert>";
            }elseif($_GET['err']==0){
                echo "<alert class='alert alert-danger'>Product Name already Exists</alert>";
            }
        }
        ?>
    </div>
</div>

<?php include("footer.php") ?>
</body>
</html>