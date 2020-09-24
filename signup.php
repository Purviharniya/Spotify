<?php  
    include('includes/scripts.php');
    include('includes/config.php');
    include('includes/classes/Account.php');
    include('includes/classes/Constants.php');

    $account = new Account($con);

    include('includes/handlers/register-handler.php');
?>

<?php

// function sanitizeFormInput($inputText)
// {
//     $inputText=trim($inputText);
//     // $inputText=strip_tags($inputText);
//     // $inputText=str_replace(" ","",$inputText);
//     return $inputText;
// }

// $userEmail="hi";

// if(isset($_POST['registerBtn']))
// {
//     $userEmail=$_POST['InputEmail1'];
//     $password1=sanitizeFormInput($_POST['password1']);
//     $password2=sanitizeFormInput($_POST['password2']);
//     $profileName= sanitizeFormInput($_POST['profileName']);
//     $contactNo=sanitizeFormInput($_POST['contactNo']);
//     $date=sanitizeFormInput($_POST['dobDate']);
//     $month=sanitizeFormInput($_POST['dobMonth']);
//     $year=sanitizeFormInput($_POST['dobYear']);
//     $tnc=isset($_POST['tnc']);

//     echo $userEmail;

// }


function rememberInput($name){
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}

?>

<html>
    <head>
        <title>  Sign up </title>
        <link rel='stylesheet' href="assets/styles/signup.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="background1">
            <div class="background2">
                <div class="row background4">
                    <div class="col-12 col-md-6 background3">
                        <img src="assets/images/signup/signup.gif" class="img-fluid d-block w-100 si-img">
                    </div>
                    <div class="col-12 col-md-6 px-5 py-5 form-col">
                        <div class="row pb-4">
                            <h1 class="si-title"> Sign up </h1>    
                        </div>
                        <form method="POST" action="signup.php" class="signup-form" autocomplete="off">
                            <div class="form-group">
                                <label for="InputEmail1">What's your email?</label>
                                <input type="email" class="form-control si-in" id="InputEmail1" name="InputEmail1" aria-describedby="emailHelp" value="<?php rememberInput('InputEmail1'); ?>" required>
                                <?php echo $account->getError(Constants::$invalidEmail); ?>
                                <?php echo $account->getError(Constants::$emailAlreadyRegistered); ?>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="password1">Create a password: </label>
                                <input type="password" class="form-control si-in" id="password1" name="password1" aria-describedby="passwordHelp" required>
                                <?php echo $account->getError(Constants::$invalidCreatePassword); ?>
                                <small id="passwordHelp" class="form-text text-muted">The password should contain:
                                    <ul>
                                        <li>8-20 Characters</li>
                                        <li>Atleast one Uppercase </li>
                                        <li>Atleast one number </li>
                                        <li>Atleast one special character </li>
                                    </ul>
                            </small>
                            </div>
                            <div class="form-group">
                                <label for="password2">Confirm password: </label>
                                <input type="password" class="form-control si-in" id="password2" name="password2" required>
                                <?php echo $account->getError(Constants::$passwordsNoMatch); ?>
                            </div>
                            <div class="form-group">
                                <label for="profileName">What should we call you? </label>
                                <input type="text" class="form-control si-in" id="profileName" name="profileName" value="<?php rememberInput('profileName'); ?>" required>
                                <?php echo $account->getError(Constants::$inavlidProfName); ?>
                            </div>
                            <div class="form-group">
                                <label for="contactNo">What is your contact number? </label>
                                <input type="text" class="form-control si-in" id="contactNo" name="contactNo" value="<?php rememberInput('contactNo'); ?>"  required>
                                <?php echo $account->getError(Constants::$contactLengthWrong); ?>
                                <?php echo $account->getError(Constants::$contactStartWrong); ?>
                            </div>
                            <div class="form-group">
                                <label for="dob">What is your date of birth? </label>
                                <div class="row">
                                    <input type="text" class="form-control col-md-3 si-in" id="date" name="dobDate"  placeholder="Date" value="<?php rememberInput('dobDate'); ?>" required>
                                    <select id="month" name="dobMonth" class="form-control si-in col-md-3 mx-3" id="month" required>
                                        <option value="">Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <input type="text" class="form-control si-in col-md-3" name="dobYear" id="year" placeholder="Year" value="<?php rememberInput('dobYear'); ?>" required>
                                </div>
                                <?php echo $account->getError(Constants::$invalidDOBYear); ?>
                                <?php echo $account->getError(Constants::$invalidDOBMonth); ?>
                                <?php echo $account->getError(Constants::$invalidDOBDate); ?>
                            </div>
                            <div class="form-check form-group">
                                <input class="form-check-input" type="checkbox" name='tnc'>
                                <label class="form-check-label">Accept our terms and conditions</label>
                                <?php echo $account->getError(Constants::$AcceptTnC); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="registerBtn" class="btn si-btn"> SIGN UP </button>
                            </div>
                            <div class="form-group si-alt">
                                Already have an account? <a href="signin.php">Sign in here. </a> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>