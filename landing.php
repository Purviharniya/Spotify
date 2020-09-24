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
        <div id="nowPlayingBarContainer">
            <div class="row nowPlayingBar">
                <div class="col-12 col-md-4">
                    img 
                </div>
                <div class="col-12 col-md-5">
                    rangebar
                </div>
                <div class="col-12 col-md-3">
                    options
                </div>
            </div>
        </div>
</body>

</html>