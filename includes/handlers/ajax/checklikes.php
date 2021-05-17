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
        if ($song[0] == $songID) {
            $c = 1;
            echo "true";
            break;
        }
    }

    if ($c == 0) {
        echo "false";
    }
}