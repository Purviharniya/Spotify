<?php

function sanitizeFormInput($inputText)
{
    $inputText=stripslashes($inputText);
    $inputText=trim($inputText);
    $inputText=strip_tags($inputText);
    $inputText=str_replace(" ","",$inputText);
    return $inputText;
}

if(isset($_POST['sumbit']))
{
    $userEmail=sanitizeFormInput($_POST['InputEmail1']);
    $password1=sanitizeFormInput($_POST['password1']);
    $password2=sanitizeFormInput($_POST['password2']);
    $profileName= sanitizeFormInput($_POST['profileName']);
    $contactNo=sanitizeFormInput($_POST['contactNo']);
    $date=sanitizeFormInput($_POST['dobDate']);
    $month=sanitizeFormInput($_POST['dobMonth']);
    $year=sanitizeFormInput($_POST['dobYear']);
    $tnc=isset($_POST['tnc']);



    $success= $account->register($userEmail,$password1,$password2,$profileName,$contactNo,$date,$month,$year,$tnc);

    if($success){
        header("Location: landing.php");
    }

}

?>
