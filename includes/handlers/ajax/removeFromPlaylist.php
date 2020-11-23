<?php

include("../../config.php");

if(isset($_POST['playlistId']) && isset($_POST['songId'])){

    $playlistId=$_POST['playlistId'];
    $songId=$_POST['songId'];

    $query= mysqli_query($con, "DELETE from playlistsongs where playlistid='$playlistId' and songid='$songId'");
}

else
{
    echo"playlist or songid was past incorrectly";
}


?>