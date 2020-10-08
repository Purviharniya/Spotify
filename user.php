<?php 
 include('includes/included_files.php');
?>

<div class="container text-center">
    <div class="centersection">
        <div class="userInfo text-left">
            <div class='text-center pb-4'><img src=" <?php echo $userLoggedIn->getProfilePic();?> " class="img-fluid pb-4"></img></div>
            <h3 class="py-2">Email:   <span><?php echo $userLoggedIn->getEmail();  ?></span></h3>
            <h3 class="py-2">Profile Name:   <span><?php echo $userLoggedIn->getProfileName();  ?></span></h3>
            <h3 class="py-2">Conatct No:   <span><?php echo $userLoggedIn->getContactNo();  ?></span></h3>
        </div>
    </div>
    <div class="buttonItems d-inline-flex flex-column">
        <button class="user-buttons" onclick="openPage('updateDetails.php')">EDIT DETAILS </button>
        <button class="user-buttons" onclick="logout()"> LOGOUT </button>  
    </div>
</div>