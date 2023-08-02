<?php
include("connection.php");
//ob_start();
session_start();

if (!isset($_SESSION['ADMINEMAIL'])) {
    header("Location:adminlogin.php");
}

$subcatid = $_GET['subcatid'];
$qr1 = "select * from subcategorytable where subcatid='$subcatid'";
$res1 = mysqli_query($con,$qr1);
//echo $qr1;
if(mysqli_num_rows($res1)>0){
    $row1 = mysqli_fetch_array($res1);
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
    <?php include("headerfiles.php"); ?>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="container">
    <form method="post" action="editsubcategoryaction.php">
        <div class="col-md-12 col-12 m-5">
            <h1 class="text-center text-success">EDIT SUB CATEGORY</h1>
            <div class="col-md-6 col-6 offset-3">
                <label>Select Category</label>
                <select name="categoryid" class="form-control">
                    <?php
                    while($row = mysqli_fetch_array($res)){
                        if($row['categoryid']==$row1['categoryid']){
                            echo "<option selected value='".$row['categoryid']."'>".$row['categoryname']."</option>";
                        }else{
                            echo "<option value='".$row['categoryid']."'>".$row['categoryname']."</option>";
                        }
                    }
                    ?>
                </select>
                <label>Enter Sub Category Name</label>
                <input type="hidden" name="subcatid" value="<?php echo $subcatid; ?>">
                <input type="text" name="subcategoryname" class="form-control" value="<?php echo $row1['subcatname'] ?>">
                <label>Enter Description</label>
                <textarea class="form-control" name="subcategorydescription"><?php echo $row1['descp'] ?></textarea>
                <button type="submit" class="btn btn-success mt-2">Submit</button>
            </div>
        </div>
    </form>
    <div class="text-center">
        <?php
        if(isset($_GET['err'])){
            if($_GET['err']==1){
                echo "<alert class='alert alert-success'>Sub Category added Successfully</alert>";
            }elseif ($_GET['err']==2){
                echo "<alert class='alert alert-danger'>Sub Category not added</alert>";
            }elseif($_GET['err']==0){
                echo "<alert class='alert alert-danger'>Sub Category Name already Exists</alert>";
            }
        }
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>