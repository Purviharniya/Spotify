<?php

include('../../config.php');

if(isset($_POST['userEmail_new']) && isset($_POST['userEmail_old']) )
{
    $email_new=$_POST['userEmail_new'];
    $email_old=$_POST['userEmail_old'];
    $query= mysqli_query($con, "UPDATE users set email='$email_new' where email='$email_old'");
    $userLoggedIn=$email_new;
    $_SESSION['userLoggedIn'] = $email_new;
    echo "Email updated successfully!";
}
else
{
    echo "User email was passed incorrectly";
}



?>