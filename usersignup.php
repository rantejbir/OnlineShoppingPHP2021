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
<?php include("header.php");  ?>
<div class="container">
    <div class="col-md-12 col-12">
        <form method="post" id="frmUserSignUp" action="usersignupaction.php" enctype="multipart/form-data">
            <h1 class="text-center text-success">USER SIGNUP</h1>
            <div class="col-md-6 col-6 offset-3">
                <label class="mt-3">Enter Email</label>
                <input type="email" name="email" id="email" class="form-control" data-rule-required="true" data-msg-required="Please Enter Email">
                 <label class="mt-3">Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-msg-required="Please Enter
                 Password">
                <label class="mt-3">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="form-control" data-rule-equalto="#password"
                       data-msg-equalto="Mismatch Password">
                 <label class="mt-3">Enter Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control" data-rule-required="true" data-msg-required="Please Enter
                Fullname">
                 <label class="mt-3">Enter Mobileno</label>
                <input type="number" name="mobileno" id="mobileno" class="form-control" data-rule-required="true" data-msg-required="Please Enter
                Mobileno">
                 <label class="mt-3">Enter Address</label>
                <textarea name="address" id="address" class="form-control" data-rule-required="true" data-msg-required="Please Enter
                Address"></textarea>
                <label class="mt-3">Enter City</label>
                <input type="text" name="city" id="city" value="Amritsar" class="form-control" data-rule-required="true" data-msg-required="Please
                Enter City">
                <label class="mt-3">Enter State</label>
                <input type="text" name="state" id="state" value="Punjab" class="form-control" data-rule-required="true" data-msg-required="Please
                Enter State">
                <label class="mt-3">Enter Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" data-rule-required="true" data-msg-required="Please
                Please Select Photo">
                <button type="submit" class="btn btn-primary">SignUp</button>
                <p class="text-center m-3">
                    <?php
                    if(isset($_GET['err'])){
                    ?>
                <div class='alert alert-danger'>
                    <?php
                    echo $_GET['err'];
                    ?>
                </div>
                <?php
                }
                ?>
                </p>
            </div>
        </form>
    </div>
</div>
<?php include("footer.php");  ?>

<script>
    $(document).ready(function(){
        $('#frmUserSignUp').validate();
    })
</script>
</body>
</html>