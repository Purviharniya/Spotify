<?php 
 include('includes/header.php'); 

 if(isset($_SESSION['userLoggedIn'])){

    session_destroy();
    echo "<script type='text/javascript'>alert('Logged out successfully!');</script>";
    header("Location: index.php");

}

 include('includes/footer.php');

?>