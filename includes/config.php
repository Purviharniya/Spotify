<?php

ob_start();

$timezone= date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root","","spotify");

if(mysqli_connect_errno()){
    echo "Could not connect to the database:" . mysqli_connect_errno();
}

?>