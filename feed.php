<?php 

include('includes/header.php'); 


if(isset($_POST['subbtn']))
{
    $_SESSION['latest_feedback']=$_POST['Feedback'];
    $_SESSION['feeds']++;

}

echo "

<div class='container'>
    <h4>Here's what we got from you: </h4>
    <p> Email: " . $_POST['UEmail'] . "</p>
    <p> Name: " . $_POST['Name'] . "</p>
    <p> Feedback: " . $_SESSION['latest_feedback'] . "</p>
    <a href='feedback.php' class='btn btn-secondary'>
        Submit another feedback -> 
    </a>
</div>


";

include('includes/footer.php'); ?>