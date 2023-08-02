<?php
//ob_start();
session_start();

if(!isset($_SESSION['USEREMAIL'])){
    header("Location:userlogin.php");
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
    <?php include("headerfiles.php"); ?>
</head>
<body>
<?php include("userheader.php"); ?>
<div class="container">
    <div class="col-md-12 col-12 m-5">
        <h1 class="text-center text-success">CHANGE PASSWORD</h1>
        <form method="post" action="usercpaction.php">
            <div class="col-md-8 col-8 offset-2">
                <label>Email ID</label>
                <input type="email" readonly name="email" value="<?php echo $_SESSION['USEREMAIL']; ?>" class="form-control">
                <label>Old Password</label>
                <input type="password" name="oldpassword" class="form-control">
                <label>New Password</label>
                <input type="password" name="newpassword" class="form-control">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" class="form-control">
                <button type="submit" class="btn btn-success mt-2">Submit</button>
            </div>
        </form>
        <div class="text-center">
            <?php
            if(isset($_GET['err'])){
                if($_GET['err']==1){
                    echo "<alert class='alert alert-success'>Password Updated Successfully</alert>";
                }elseif ($_GET['err']==2){
                    echo "<alert class='alert alert-danger'>Password not updated</alert>";
                }elseif($_GET['err']==0){
                    echo "<alert class='alert alert-danger'>Incorrect Old Password</alert>";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
