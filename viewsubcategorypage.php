<?php
include ("connection.php");

//ob_start();
session_start();

if (!isset($_SESSION['ADMINEMAIL'])) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="container m-5">
    <div class="col-md-12 col-12">
        <h1 class="text-center text-success">VIEW SUB CATEGORY</h1>
        <a href="addsubcategorypage.php" class="btn btn-success btn-sm m-4 text-light">Add New
            Sub Category</a>
        <div class="col-12 col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Srno</th>
                    <th>Category Name</th>
                    <th>Sub Category Name</th>
                    <th>Description</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                $select = "select subcategorytable.*,categorytable.categoryname from subcategorytable,categorytable where subcategorytable.categoryid=categorytable.categoryid";
                $res = mysqli_query($con,$select);
                $num = 1;
                while($row = mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<th>".$num."</th>";
                    echo "<td>".$row['categoryname']."</td>";
                    echo "<td>".$row['subcatname']."</td>";
                    echo "<td>".$row['descp']."</td>";
                    echo "<td><a href='editsubcategorypage.php?subcatid=".$row['subcatid']."'><i class='fa fa-pen'></i></a></td>";
                    echo "<td><a href='deletesubcategorypage.php?subcatid=".$row['subcatid']."'><i class='fa fa-trash-alt text-danger'></i></a></td>";
                    echo "</tr>";
                    $num++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>






