<?php

include '../../config.php';

if (isset($_POST['userpass_new']) && isset($_POST['userpass_old']) && isset($_POST['userEmail'])) {

    $password_new = md5($_POST['userpass_new']);
    $password_old = md5($_POST['userpass_old']);
    $userEmail = $_POST['userEmail'];

    $query1 = mysqli_query($con, "SELECT password from users where email='$userEmail'");
    while ($row = mysqli_fetch_array($query1)) {
        if ($password_old == $row['password']) {
            $query = mysqli_query($con, "UPDATE users set password='$password_new' where email='$userEmail'");
            echo "Password updated successfully!";
        } else {
            echo "Current password is incorrect";
        }
    }

} else {
    echo "User password was passed incorrectly";
}
