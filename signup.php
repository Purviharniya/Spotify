<?php  
include('includes/scripts.php');
?>

<html>
    <head>
        <title>  Sign up </title>
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
                        <h1 class="si-title"> Sign up </h1>    
                    </div>
                    <form method="post" action="#" class="signup-form">
                        <div class="form-group">
                            <label for="InputEmail1">What's your email?</label>
                            <input type="email" class="form-control si-in" id="InputEmail1" name="InputEmail1" aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password1">Create a password: </label>
                            <input type="password" class="form-control si-in" id="password1" name="password1" aria-describedby="passwordHelp" required>
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
                        </div>
                        <div class="form-group">
                            <label for="profileName">What should we call you? </label>
                            <input type="text" class="form-control si-in" id="profileName" name="profileName" required>
                        </div>
                        <div class="form-group">
                            <label for="contactNo">What is your contact number? </label>
                            <input type="text" class="form-control si-in" id="contactNo" name="contactNo" aria-describedby="contactNo" required>
                        </div>
                        <div class="form-group">
                            <label for="dob">What is your date of birth? </label>
                            <div class="row">
                                <input type="text" class="form-control col-md-3 si-in" id="date"  placeholder="Date" required>
                                <select id="month" name="month" class="form-control si-in col-md-3 mx-3" id="month" required>
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

                                <input type="text" class="form-control si-in col-md-3" id="year" placeholder="Year" required>
                            </div>
                        </div>
                        <div class="form-check form-group">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Accept our terms and conditions</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign up" name="submit" class="btn si-btn"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>