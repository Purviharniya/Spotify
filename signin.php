<?php  
    include('includes/scripts.php');
    include('includes/classes/Account.php');

    $account = new Account();

    include('includes/handlers/login-handler.php');
?>

<html>
    <head>
        <title>  Sign in </title>
        <link rel='stylesheet' href="styles/signup.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="background1">
        <div class="background2">
            <div class="row background4">
                <div class="col-12 col-md-6 background3">
                    <img src="styles/assets/signup.gif" class="img-fluid d-block w-100 si-img">
                </div>
                <div class="col-12 col-md-6 px-5 py-5 form-col">
                    <div class="row pb-4">
                        <h1 class="si-title"> Sign in </h1>    
                    </div>
                    <form method="POST" action="signin.php" class="signin-form" autocomplete="off">
                        <div class="form-group">
                            <label for="InputEmail1">What's your email?</label>
                            <input type="email" class="form-control si-in" id="InputEmail1" name="InputEmail1" required>
                            <?php echo $account->getError("Email is invalid"); ?>
                        </div>
                        <div class="form-group">
                            <label for="password1">Create a password: </label>
                            <input type="password" class="form-control si-in" id="password1" name="password1" required>
                            <?php echo $account->getError( "Password should have 8-20 characters, atleast one Uppercase letter, atleast one number and atleast one special character!"); ?>
                        </div>
                        <div class="form-check form-group">
                            <input class="form-check-input" type="checkbox" name='rem-me'>
                            <label class="form-check-label">Remember me</label>
                            <?php echo $account->getError("Accept to the terms & conditions"); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="loginBtn" class="btn si-btn"> SIGN IN </button>
                        </div>
                        <div class="form-group si-alt">
                           Don't have an account? <a href="signup.php">Sign up here. </a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>