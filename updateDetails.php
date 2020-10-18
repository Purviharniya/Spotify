<?php
include 'includes/included_files.php';
?>

<div class="form-container container py-5">
    <h1 class="text-center"> Update Details </h1>
    <div class="form-group">
        <h3>Email: </h3>
        <input type="email" value="<?php echo $userLoggedIn->getEmail(); ?>" name="upd_Email" class="upd_Email form-control">
    </div>
    <div class="form-group">
        <button class="user-buttons-1" onclick="updateEmail('upd_Email')">  Update Email </button>
    </div>
    <div class="form-group">
        <h3> Current Password: </h3>
        <input type ="password" name = "curr_password" class="current_pass form-control">
    </div>
    <div class="form-group">
        <h3> New Password: </h3>
        <input type ="password" name = "new_password" class="new_pass1 form-control">
    </div>
    <div class="form-group">
        <h3> Confirm Password: </h3>
        <input type ="password" name = "confirm_password" class="new_pass2 form-control">
    </div>
    <div class="form-group">
        <button class="user-buttons-1" onclick="updatePassword('current_pass','new_pass1','new_pass2')">  Update Password </button>
    </div>
    <div class="form-group">
    <h3> Username: </h3>
    <input type ="text" name = "username" value = "<?php echo $userLoggedIn->getProfileName(); ?>" class="form-control">
    </div>
    <div class="form-group">
        <button class="user-buttons-1" onclick="updatePassword('current_pass','new_pass1','new_pass2')">  Update Username </button>
    </div>
    <div class="form-group">
        <h3> Contact Number: </h3>
        <input type = "text" name = "contact_no" value = "<?php echo $userLoggedIn->getContactNo(); ?>" class="form-control">
    </div>
    <div class="form-group">
        <button class="user-buttons-1" onclick="updatePassword('current_pass','new_pass1','new_pass2')">  Update Contact </button>
    </div>
</div>