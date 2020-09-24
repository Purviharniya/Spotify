<?php

    if(isset($_SESSION['userLoggedIn'])){
        $userLogedIn = $_SESSION['userLoggedIn'];
    }

    else{
        header("Location: signin.php");
    }
?>