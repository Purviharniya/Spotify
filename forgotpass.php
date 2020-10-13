<?php
require('vendor/autoload.php');
include('includes/scripts.php');
include('includes/config.php');
include('includes/handlers/setnewpass.php');

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);

function countTokens()
{
    if (isset($_SESSION["tokens_generated"])) {
        $_SESSION["tokens_generated"]++;
    } else {
        $_SESSION["tokens_generated"] = 1;
    }
}

$msg = "";
if (isset($_POST['token-btn'])) {
    $subject = "SPOTIFY CHANGE PASSWORD";
    $emailID = $_POST['email'];
    $query = mysqli_query($con, "SELECT email from users where email='$emailID'");

    if (mysqli_num_rows($query) != 0) {
        $query2 = mysqli_query($con, "SELECT token from users where email='$emailID'");
        while ($row = mysqli_fetch_array($query2)) {
            $token = $row['token'];
            $msg = "Use this token to reset your pasword : <br>" . $token;

            try {
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'symphony.lyy@gmail.com';
                $mail->Password = 'password';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->setFrom('symphony.lyy@gmail.com', 'Symphony');
                $mail->addAddress($emailID);
                $mail->isHTML(true);
                $mail->Subject = 'Token for forgot password';
                $mail->Body = $msg;
                $mail->send();
                echo "<script>alert('Mail has been sent successfully!');</script>";
            } catch (Exception $e) {
                echo "<script> alert('Mail could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
            }
        }
    } else {

        echo "<script>alert('user does not exist! please check your email or sign up!');</script>";
    }

}
?>

<html>

<head>
    <title> Forgot password </title>
    <link rel='stylesheet' href="assets/styles/signin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="fo-background1">
        <div class="fo-background2">
            <div class="row fo-background4">
                <div class="col-12 col-md-6 fo-background3">
                    <img src="assets/images/signin/Search.gif" class="img-fluid d-block w-100 fo-img">
                </div>
                <div class="col-12 col-md-6 px-5 py-5 fo-form-col">
                    <div class="row pb-2">
                        <h1 class="fo-title"> GET TOKEN </h1>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="fo-form"
                        autocomplete="off">
                        <div class="form-group">
                            <small id="#" class="form-text text-danger font-weight-bold">Only three attempts! </small>
                        </div>
                        <div class="form-group">
                            <label for="FoEmail">Email:</label>
                            <input type="email" class="form-control fo-in" id="FoEmail" name="email" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="token-btn" class="btn fo-btn"
                                onclick="<?php countTokens();?>"
                                <?php if ($_SESSION['tokens_generated'] > 3) {echo "disabled";}?>> GET TOKEN
                            </button>
                        </div>

                    </form>
                    <div class="row py-4">
                        <h1 class="fo-title"> RESET PASSWORD</h1>
                    </div>
                
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="fo-form" autocomplete="off">
                        <div class="form-group">
                            <label for="FoEmail">Email:</label>
                            <input type="email" class="form-control fo-in" id="FoEmail" name="emailid" required>
                        </div>
                        <div class="form-group">
                            <label for="FoToken">Token:</label>
                            <input type="text" class="form-control fo-in" id="FoToken" name="token" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="FoPassword">New Password:</label>
                            <input type="password" class="form-control fo-in" id="FoPassword" name="pass1" aria-describedby="passwordHelp" required>
                            <small id="passwordHelp" class="form-text text-muted">The password should contain:
                                    <ul>
                                        <li>8-20 Characters</li>
                                        <li>Atleast one Uppercase </li>
                                        <li>Atleast one number </li>
                                        <li>Atleast one special character </li>
                                    </ul>
                            </small>
                        </div>
                        <div class='error-msg'><?php echo $pass1Er;?></div>
                        <div class="form-group">
                            <label for="FoPassword">Re-enter Password:</label>
                            <input type="password" class="form-control fo-in" id="FoPassword" name="pass2" required>
                        </div>
                        <div class='error-msg'><?php echo $pass2Er;?></div>
                        <div class="form-group">
                            <button type="submit" name="pass-btn" class="btn fo-btn" title="Sign in"> RESET
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>