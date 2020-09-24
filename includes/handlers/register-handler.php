<?php

function sanitizeFormInput($inputText)
{
    $inputText=trim($inputText);
    $inputText=strip_tags($inputText);
    $inputText=str_replace(" ","",$inputText);
    return $inputText;
}

if(isset($_POST['registerBtn']))
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
        echo "<script type='text/javascript'>alert('Registered successfully!');</script>";
        header("Location: landing.php");
    }
    
    else{
        echo "<script type='text/javascript'>alert('Could not register! Check for errors.');</script>";
    }
}

?>
 

<?php  

// $emer='';

// if(isset($_POST['submit'])){
//     $em=$_POST['InputEmail1'];

//     if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
//         $emer="Invalid Email";
//     }
// }

?> 
