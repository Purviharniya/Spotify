<?php
    include('includes/config.php');
    include('includes/scripts.php');
    include('includes/classes/Artist.php');
    include('includes/classes/Album.php');
    include('includes/classes/Song.php');
 
    if(isset($_SESSION['userLoggedIn'])){
        $userLogedIn = $_SESSION['userLoggedIn'];
        if(isset($_SESSION['ca']))
        {
        $_SESSION['ca']++;
        }
        else{
            $_SESSION['ca']=1;
        }
    }

    else{
        $_SESSION['ca']=1;
        header("Location: signin.php");
    }
    
?>


<html>
    <head>
        <link rel="stylesheet" href="assets/styles/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


    <body>
    <div class="main-container">
        <button class="navbar-toggler d-block d-md-none btn sidebar-tog" id="tog-nav" type="button" data-toggle="collapse" data-target="#sidebarnavbar" >
            <i class="fa fa-bars"></i>
        </button>


        <div class="d-flex flex-column  flex-md-row top-container">
            
            <?php include('includes/navbarContainer.php'); ?>

            <div class="col-12 col-md-10 mainview-container pages">