<?php 
 //if page loaded via ajax
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
    // echo "came from ajax";
    include('includes/config.php');
    include('includes/scripts.php');
    include("includes/classes/User.php");
    include('includes/classes/Artist.php');
    include('includes/classes/Album.php');
    include('includes/classes/Song.php');
    include('includes/classes/Playlist.php');

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
    }
    else {
		echo "User's Email variable was not passed into page. Check the openPage JS function";
		exit();
	}
}
else{
    include('includes/header.php');
    include('includes/footer.php');

    $url=$_SERVER['REQUEST_URI'];
    echo "<script>openPage('$url'); </script>";
    exit(); 
}

?>