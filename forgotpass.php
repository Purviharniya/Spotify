<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
require 'vendor/autoload.php'; 
include('includes/scripts.php');
include('includes/config.php');

$mail = new PHPMailer(true); 

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
        $msg=  "Use this token to reset your pasword : <br>" .$token ;

  
        try { 
            $mail->SMTPDebug = 2;                                        
            $mail->isSMTP();                                             
            $mail->Host       = 'smtp.gfg.com;';                     
            $mail->SMTPAuth   = true;                              
            $mail->Username   = 'user@gfg.com';                  
            $mail->Password   = 'password';                         
            $mail->SMTPSecure = 'tls';                               
            $mail->Port       = 587;   
        
            $mail->setFrom('atharvakitkaru01@gmail.com', 'Aharva');            
            $mail->addAddress($emailID); 
            // $mail->addAddress('receiver2@gfg.com', 'Name'); 
            
            $mail->isHTML(true);                                   
            $mail->Subject = 'Token for forgot password'; 
            $mail->Body    = $msg ; 
            //$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
            $mail->send(); 
            echo "Mail has been sent successfully!"; 
        } 
        catch (Exception $e) { 
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
        } 
        




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
