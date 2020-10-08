<?php

include('includes/scripts.php');
include('includes/config.php');

$msg="";
if(isset($_POST['token-btn']))
{
    $subject = "SPOTIFY CHANGE PASSWORD";

    $emailID=$_POST['email'];
    $query=mysqli_query($con,"SELECT email from users where email='$emailID'");
    
    if(mysqli_num_rows($query)!=0)
    {
        $query2= mysqli_query($con, "SELECT token from users where email='$emailID'");
        while($row = mysqli_fetch_array($query2)){
        $token= $row['token'];
        $msg=  "your token is:" .$token ;
        // $headers = "From: spotify@spotify.com";
        // mail($emailID, $subject, $msg, $headers);
        //echo "<script>alert('email has been sent);</script>";

        // $new_token=  bin2hex(random_bytes(20));
        // $query3=mysqli_query($con, "UPDATE users SET token='$new_token' where email='$emailID'");
        }
    }

    else{

        echo "user does not exist! please check your email or sign up!";
    }

}



include('includes/handlers/login-handler.php');

?>


<html>

<form action="forgotpass.php" method="POST">
    EMAIL: <input type="email" name="email" required><br>
    <input type="submit" name="token-btn" value="GET TOKEN">
    <?php echo $msg; ?>
</form>

<form action="includes/handlers/setnewpass.php" method="POST">
    EMAIL: <input type="email" name="emailid" required><br>
    TOKEN: <input type="text" name="token" required><br>
    ENTER NEW PASSWORD: <input type="password" name="pass1" required><br>
    RE-ENTER NEW PASSWORD: <input type="password" name="pass2" required><br>
    <input type="submit" name="pass-btn" value="submit">
</form>

</html>
