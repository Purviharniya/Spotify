<?php  
    include('includes/scripts.php');
    include('includes/config.php');
    include('includes/classes/Constants.php');
    include('includes/classes/Account.php');

    $account = new Account($con);

    include('includes/handlers/login-handler.php');

    function rememberInput($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }
?>

<html>
    <head>
        <title>  Sign in </title>
        <link rel='stylesheet' href="assets/styles/signin.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="lo-background1">
            <div class="lo-background2">
                <div class="row lo-background4">
                    <div class="col-12 col-md-6 lo-background3">
                        <img src="assets/images/signin/signin.gif" class="img-fluid d-block w-100 lo-img">
                    </div>
                    <div class="col-12 col-md-6 px-5 py-5 lo-form-col">
                        <div class="row pb-4">
                            <h1 class="lo-title"> Sign in </h1>    
                        </div>
                        <form method="POST" action="signin.php" class="signin-form" autocomplete="off">
                            <div class="form-group">
                                <?php echo $account->getError(Constants::$loginFailed); ?>
                            </div>
                            <div class="form-group">
                                <label for="SiEmail">Email:</label>
                                <input type="email" class="form-control lo-in" id="SiEmail" name="LoEmail" value="<?php 
                                if(isset($_COOKIE["member_login"])){
                                    echo $_COOKIE["member_login"];
                                 }
                                 else{
                                    rememberInput('LoEmail');
                                 } 
                                ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="SiPassword">Password: </label>
                                <input type="password" class="form-control lo-in" id="SiPassword" name="LoPassword" value="<?php
                                 if(isset($_COOKIE["member_password"])){
                                   echo $_COOKIE["member_password"];
                                }
                                ?>"
                                required>
                            </div>
                            <div class="form-group">
                                <a href="#" class="lo-fo">Forgot your password? </a>
                            </div>
                            <div class="form-check form-group">
                                <input class="form-check-input" type="checkbox" name='rem-me' <?php if(isset($_COOKIE["member_login"])){?> checked <?php } ?>>
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="loginBtn" class="btn lo-btn" title="Sign in"> SIGN IN </button>
                            </div>
                            <div class="form-group lo-alt">
                                Don't have an account? <a href="signup.php" class="lo-fo">Sign up here. </a> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>