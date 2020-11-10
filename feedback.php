<?php 

include('includes/included_files.php');

if(!isset($_SESSION['feeds'])){
    $_SESSION['feeds']=0;
}


$user_em=$_SESSION['userLoggedIn'];

echo "
<form  method='post' action='feed.php' class='feedback p-5'>

    <div class='form-group row'>
        <label for='Email' class='col-12 col-md-3'>EMAIL: </label>
        <input type='text' class='form-control col-12 col-md-6' name='Email' value='".$user_em."' disabled='true'>
        <input type='hidden' class='form-control col-12 col-md-6' name='UEmail' value='".$user_em."'>
    </div>

    <div class='form-group row'>
        <label for='Name' class='col-12 col-md-3'>NAME: </label>
        <input type='text' class='form-control col-12 col-md-6' name='Name' required>
    </div>

    <div class='form-group row'>
        <label for='Feedback' class='col-12 col-md-3'>FEEDBACK: </label>
        <textarea class='form-control col-12 col-md-6' name='Feedback' rows='5' required></textarea>
    </div>
    <div class='form-group row'>
        <button type='submit' class=' offset-md-3 user-buttons-1' name='subbtn'>SUBMIT </button>
    </div>
</form>

<h6 class='float-right text-muted'> FEEDBACKS SUBMITTED: " . $_SESSION['feeds'] . " </h6>
";

