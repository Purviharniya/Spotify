<?php
    include('includes/config.php');
    include('includes/scripts.php');
    if(isset($_SESSION['userLoggedIn'])){
        $userLogedIn = $_SESSION['userLoggedIn'];
    }

    else{
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

        <!-- <script>
            $(window).ready(function(){
                if($(window).width()>=768){
                    $(document).ready(function(){
                        $(".sidebarnavbar").addClass("show");
                    })
                }
            })

        </script> -->


        <script>

            $(document).ready(function(){
                showNav();

                $(window).resize(showNav);
            });

            function showNav(){
                
                if($(window).width()>=768){
                    $(document).ready(function(){
                        $(".sidebarnavbar").addClass("show");
                        $(".sidebarnavbar").removeClass("sidebar-zz");
                    })
                }
                if($(window).width()<768){
                    $(document).ready(function(){
                        $(".sidebarnavbar").removeClass("show");
                        $(".sidebarnavbar").addClass("sidebar-zz");
                    })
                }
            }

        </script>

        <div class="d-flex flex-column  flex-md-row top-container">
            <div class="collapse navbar-collapse shadow col-md-2 col-12 navigation-container sidebarnavbar"  id="sidebarnavbar">
                <div class="sidebar nav min-vh-100">
                    <ul class="navbar-nav s-nav w-100 pt-5 px-2">
                        <li class="nav-item">
                            <a class="nav-link side-logo" href="landing.php"> <img src="assets/images/icons/logo.png"> </a>
                        </li>

                        <div class="group1">
                            <li class="nav-item">
                                <a class="nav-link" href="search.php"> Search 
                                    <img src="assets/images/icons/search.png" alt="search" class="ic-search">
                                </a>
                            </li>
                        </div>
                        <div class="group1">
                            <li class="nav-item">
                                <a class="nav-link" href="browse.php"> Browse </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="yourmusic.php"> Your Music </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user.php"> Purvi H </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-10 page-container" style="background:red">
                hi
            </div>
            
        </div>

        <div id="nowPlayingBarContainer">
            <div class="row py-4 nowPlayingBar">

                <div class="col-12 col-md-3 bar-left content py-1">
                    <span class="albumlink">
                        <img src="assets/images/albumimages/album1.jpg" class="albumArtwork">
                    </span>
                    <div class="track-info">
                        <span class="trackname">
                            <span>Song Name </span>
                        </span>
                        <span class="artistname">
                            <span>Artist Name </span>
                        </span>
                    </div>
                </div> 

                <div class="col-12 col-md-6 py-1 px-5 d-flex flex-column content">
                    <div class="controlButton-container text-center">
                        <button class="controlButton shuffleButton" title="Shuffle button"> 
                            <img src="assets/images/icons/shuffle.png" alt="shuffle" class="shufflebt-i">
                        </button>
                        <button class="controlButton previousButton" title="Previous button"> 
                            <img src="assets/images/icons/previous.png" alt="previous" class="previousbt-i">
                        </button>
                        <button class="controlButton playButton" title="Play button"> 
                            <img src="assets/images/icons/play.png" alt="play" class="playbt-i">
                        </button>
                        <button class="controlButton pauseButton" title="Pause button" style="display:none;"> 
                            <img src="assets/images/icons/pause.png" alt="pause" class="pausebt-i">
                        </button>
                        <button class="controlButton nextButton" title="Next button"> 
                            <img src="assets/images/icons/next.png" alt="next" class="nextbt-i">
                        </button>
                        <button class="controlButton repeatButton" title="Repeat button"> 
                            <img src="assets/images/icons/repeat.png" alt="repeat" class="repeatbt-i">
                        </button>
                    </div>
                    <div class="playBar-container d-flex justify-content-center pt-2">
                        <span class="progressTime current pr-3"> 0.00 </span> 

                        <div class="progressbar">
                            <div class="progressbar-bg">
                                <div class="progressprogress"></div>
                            </div>
                        </div>

                        <span class="progressTime remaining pl-3"> 0.00 </span> 
                    </div>
                </div>

                <div class="col-12 col-md-3 d-none d-md-block content align-self-center">
                    <div class="volume-bar d-flex justify-content-center">

                        <button class='controlButton volumeButton' title="Volume button">
                            <img src="assets/images/icons/volume.png" alt="volume" class="volumebt-i">
                        </button>

                        <div class="progressbar">
                            <div class="progressbar-bg">
                                <div class="progressprogress"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>        
    </body>

</html>