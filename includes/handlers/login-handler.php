<?php  

if(isset($_POST['loginBtn']))
{

    //login btn pressed
    $loginEmail=$_POST['LoEmail'];
    $loginPassword=$_POST['LoPassword'];

    //call login from accounts class

    $result = $account->login($loginEmail,$loginPassword);
    $loginvalid=false;

    if($result==true)
    {
        $loginvalid=true;
        $_SESSION['userLoggedIn'] = $loginEmail;

        if(!empty($_POST['rem-me'])){
            setcookie("member_login",$_POST["LoEmail"],time()+(10*365*24*60*60));
            setcookie("member_password",$_POST['LoPassword'],time()+(10*365*24*60*60));
        }

        else{
            if(isset($_COOKIE["member_login"])){
                setcookie("member_login","");
            }
            if(isset($_COOKIE["member_password"])){
                setcookie("member_password","");
            }
        }

        header("Location: landing.php");
    }

    else
    {
        $loginvalid=false;
    }
    
}

?>