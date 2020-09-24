<?php  
include('includes/scripts.php');
?>

<html>
    <head>
        <title>Spotify</title>
        <link rel="stylesheet" href="assets/styles/home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <section class="navigation bar">
            <nav class="navbar navbar-expand-lg py-4 home-navbar">
                <div class="container">
                    <a class="navbar-brand home-navbar-brand" href="/spotify/index.php"><img src="assets/images/home/logo.png" class="img-fluid" height="40" width="45"> Spotify</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#homenav" aria-controls="homenav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars" style="color:#e6e6ff"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="homenav">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item pr-4">
                            <a class="home-link nav-link" href="#"><i class=" fa fa-credit-card"></i> Premium </a>
                        </li>
                        <li class="nav-item">
                            <a class="home-link nav-link" href="#"><i class="fa fa-question-circle "></i> Help</a>
                        </li>
                        <li class="nav-item"> 
                        <a class="home-link nav-link d-none d-md-block"> | </a>
                        </li>
                        <li class="nav-item">
                            <a class="home-link nav-link d-block d-md-none"> --- </a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="home-link nav-link" href="signup.php"><i class="fa fa-sign-in"></i> Sign up</a>
                        </li> 
                        <li class="nav-item">
                            <a class="home-link nav-link" href="signin.php"> <i class="fa fa-user-circle-o"></i> Log in</a>
                        </li>
                        </ul>  
                    </div>
                </div>
            </nav>
        </section>

        <section class="body-part">
            <div class="home-background">
                <div class="text-box">
                    <h1 class="title-home text-left"> Get great music, </h1><h1 class="title-home text-right"> right now! </h1>
                    <div class="des-home py-2"> Listening is everything. </div>
                    <ul class="home-ul text-left">
                        <li>Discover music you'll fall in love with </li>
                        <li>Create your own playlists </li>
                        <li>Follow artists to keep up to date </li>
                    </ul> 
                    <a href="signup.php">
                        <button class="btn get-button">Get spotify free </button> 
                    </a>
                </div>
            </div>
        </section>

        <section class="footer-sec">
            <div class="container-fluid footer py-4">
            <div class="row text-center pb-4">
                    <div class="col-12">
                    <span class="fa fa-instagram social"></span>
                    <span class="fa fa-twitter social mx-2"></span>
                    <span class="fa fa-facebook social"></span>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                    Made by Purvi & Atharva, KJSCE | &copy; 2020
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

