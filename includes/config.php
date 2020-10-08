<?php

ob_start();
session_start();
$timezone= date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root","","spotify");

ini_set('SMTP', "smtp.gmail.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "purvi.harniya@gmail.com");

if(mysqli_connect_errno())
{
    echo "Could not connect to the database:" . mysqli_connect_errno();
}

?>