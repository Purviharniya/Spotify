<?php 

include('includes/header.php'); 

if(!isset($_SESSION['feeds'])){
    $_SESSION['feeds']=0;
}


$user_em=$_SESSION['userLoggedIn'];

echo "
<h3 class='text-center pt-5'>Submit Your Feedbacks Here! </h3>
<form  method='post' action='feed.php' class='feedback-form p-5' >

    <div class='form-group row'>
        <label for='Email' class='col-12 col-md-3 align-self-center'>EMAIL: </label>
        <input type='text' class='form-control col-12 col-md-6' name='Email' value='".$user_em."' disabled='true'>
        <input type='hidden' class='form-control col-12 col-md-6' name='UEmail' value='".$user_em."'>
    </div>

    <div class='form-group row'>
        <label for='Name' class='col-12 col-md-3 align-self-center'>NAME: </label>
        <input type='text' class='form-control col-12 col-md-6' name='Name' required>
    </div>

    <div class='form-group row'>
        <label for='Feedback' class='col-12 col-md-3 align-self-center'>FEEDBACK: </label>
        <textarea class='form-control col-12 col-md-6' name='Feedback' rows='3' required></textarea>
    </div>
    <div class='form-group row'>
        <button type='submit' class=' offset-md-3 btn btn-primary' name='subbtn'>SUBMIT </button>
    </div>
</form>

<h5 class='float-right'> FEEDBACKS SUBMITTED: " . $_SESSION['feeds'] . " </h5>
";

include('includes/footer.php'); ?>