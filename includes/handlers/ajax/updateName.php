<?php

include('../../config.php');

if(isset($_POST['username']) && isset($_POST['useremail']) )
{
    $username=$_POST['username'];
    $email=$_POST['useremail'];
    $query= mysqli_query($con, "UPDATE users set profilename='$username' where email='$email'");
    echo "Username updated successfully!";
}
else
{
    echo "User name or email was passed incorrectly";
}



?>