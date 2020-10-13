<?php

include("../../config.php");

if(isset($_POST['playlistID'])){
    $playlistid=$_POST['playlistID'];
    $query=mysqli_query($con,"DELETE from playlists where id='$playlistid'");
    $query2=mysqli_query($con,"DELETE from playlistsongs where playlistid='$playlistid'");
}
else{
    echo("Playlist Could not be Deleted! playlist id was not passed in correctly!");
}


?>