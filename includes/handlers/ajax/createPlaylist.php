<?php

include("../../config.php");

if(isset($_POST['playlistName']) && isset($_POST['useremail'])){
    $playlistname=$_POST['playlistName'];
    $email=$_POST['useremail'];
    $date=date("Y-m-d");

    $query=mysqli_query($con,"INSERT INTO playlists VALUES ('','$playlistname','$email','$date')");
}
else{
    echo("Playlist Could not be created! Email or playlist name was not passed in correctly!");
}


?>