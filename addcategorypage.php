<?php
//ob_start();
session_start();

if(!isset($_SESSION['ADMINEMAIL'])){
    header("Location:adminlogin.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <?php include("headerfiles.php") ?>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="container">
    <form method="post" id="frmAddCategory" action="addcategoryaction.php">
        <div class="col-md-12 col-12 m-5">
            <h1 class="text-center text-success">NEW CATEGORY</h1>
            <div class="col-md-6 col-6 offset-3">
                <label>Enter Category Name</label>
                <input type="text" name="categoryname" class="form-control" data-rule-required="true" data-msg-required="Please Enter Category Name">
                <label>Enter Description</label>
                <textarea class="form-control" name="categorydescription"></textarea>
                <button type="submit" class="btn btn-success mt-2">Submit</button>
            </div>
        </div>
    </form>
    <div class="text-center">
        <?php
        if(isset($_GET['err'])){
            if($_GET['err']==1){
                echo "<alert class='alert alert-success'>Category added Successfully</alert>";
            }elseif ($_GET['err']==2){
                echo "<alert class='alert alert-danger'>Category not added</alert>";
            }elseif($_GET['err']==0){
                echo "<alert class='alert alert-danger'>Category Name already Exists</alert>";
            }
        }
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
<script>
    $(document).ready(function(){
        $('#frmAddCategory').validate();
    })
</script>
</body>
</html>