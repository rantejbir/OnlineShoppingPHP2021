<?php

$con = mysqli_connect("localhost","root","","onlineshoppingdb");

if(!$con){
    mysqli_error("Couldn't Connect to Database");
}
