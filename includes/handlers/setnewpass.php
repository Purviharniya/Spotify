<?php

   include('../config.php');

if(isset($_POST['pass-btn'])){
    $email = $_POST['emailid'];
    $token = $_POST['token'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $enc_p=md5($pass1);

    $q = mysqli_query($con,"SELECT token from users where email='$email'");

    while($row = mysqli_fetch_array($q)){
        if($row['token'] == $token)
        {
            $query= mysqli_query($con,"UPDATE users set password='$enc_p' where email='$email'");
            
            echo "Password updated successfully";
            
            $new_token=  bin2hex(random_bytes(20));
            $query3=mysqli_query($con, "UPDATE users SET token='$new_token' where email='$email'");
        }
    }

    //

}


?>