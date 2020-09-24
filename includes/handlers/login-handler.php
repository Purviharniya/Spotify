<?php  

if(isset($_POST['loginBtn']))
{

    //login btn pressed
    $loginEmail=$_POST['LoEmail'];
    $loginPassword=$_POST['LoPassword'];

    //call login from accounts

    $result = $account->login($loginEmail,$loginPassword);
    
    if($result==true){

        $_SESSION['userLoggedIn'] = $loginEmail;
        header("Location: landing.php");
    }
}

?>