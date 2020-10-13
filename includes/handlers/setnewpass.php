<?php
   $pass1Er='';
   $pass2Er='';

if(isset($_POST['pass-btn']))
{
    $email = $_POST['emailid'];
    $token = $_POST['token'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $error_checker=1;
    if(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass1)){
        $error_checker=0; //password does not match validation
        $pass1Er="Invalid Password";
    }

    if($pass1 != $pass2){
        $error_checker=0; //both passwords are different
        $pass2Er="Both passwords don't match! ";
    } 
    
    if($error_checker == 1)
    {

        $enc_p=md5($pass1);

        $q = mysqli_query($con,"SELECT token from users where email='$email'");

        while($row = mysqli_fetch_array($q)){
            if($row['token'] == $token)
            {
                $query= mysqli_query($con,"UPDATE users set password='$enc_p' where email='$email'");
                
                echo "<script>alert('Password updated successfully');
                        window.location='signin.php';</script>
                        ";
                
                $new_token=  bin2hex(random_bytes(20));
                $query3=mysqli_query($con, "UPDATE users SET token='$new_token' where email='$email'");
            }
            else{
                echo "<script>alert('Invalid token! Please check your email.');</script>";
            }
        }
    }
    else{
        echo "<script>alert('Password could not be updated! Check for errors!');</script>";
    }
}
?>