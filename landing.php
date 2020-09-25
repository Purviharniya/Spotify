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
        <div class="top-container">
            <div class="navigation-container">
            </div>
            <div class="page-container">
            </div>
        </div>
        <div id="nowPlayingBarContainer" style="height:150px">
            <div class="row nowPlayingBar">
                <div class="col-12 col-md-3">
                    img 
                </div> 
                <div class="col-12 col-md-6 py-3 px-5 d-flex flex-column justify-content-center">
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
                    <div class="playBar-container d-flex justify-content-center">
                        <span class="progressTime current pr-3"> 0.00 </span> 

                        <div class="progressbar">
                            <div class="progressbar-bg">
                                <div class="progressprogress"></div>
                            </div>
                        </div>

                        <span class="progressTime remaining pl-3"> 0.00 </span> 
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    options
                </div>
            </div>
        </div>
    </div>        
    </body>

</html>