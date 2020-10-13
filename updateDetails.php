<?php
include 'includes/included_files.php';
?>

<div class="form-container">

    <h3>Email: </h3>
    <input type="email" value="<?php echo $userLoggedIn->getEmail(); ?>" name="upd_Email" class="upd_Email">
    <button class="user-buttons" onclick="updateEmail('upd_Email')">  Update Email </button>
    <h3> Current Password: </h3>
    <input type ="password" name = "curr_password" class="current_pass">
    <h3> New Password: </h3>
    <input type ="password" name = "new_password" class="new_pass1">
    <h3> Confirm Password: </h3>
    <input type ="password" name = "confirm_password" class="new_pass2">
    <button class="user-buttons" onclick="updatePassword('current_pass','new_pass1','new_pass2')">  Update Password </button>

    <h3> Username: </h3>
    <input type ="text" name = "username" value = "<?php echo $userLoggedIn->getProfileName(); ?>">

    <h3> Contact Number: </h3>
    <input type = "number" name = "contact_no" value = "<?php echo $userLoggedIn->getContactNo(); ?>">
</div>