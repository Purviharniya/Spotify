<?php
include "../../config.php";

if (isset($_POST['songID'])) {
    $c = 0;
    $songID = $_POST['songID'];
    $user = $_SESSION['userLoggedIn'];

    $q = mysqli_query($con, "SELECT songid from likedsongs where email='$user'");

    $row = mysqli_fetch_all($q);

    foreach ($row as $song) {
        $c = 0;
        // print_r($song);
        if ($song[0] == $songID) {
            $c = 1;
            if ($c == 1) {
                $query = mysqli_query($con, "DELETE from likedsongs where email='$user' and songid='$songID'");

                echo "false";
            }
            break;
        }
    }

    if ($c == 0) {
        $query = mysqli_query($con, "INSERT into likedsongs values('','$user','$songID')");
        echo "true";
    }
}