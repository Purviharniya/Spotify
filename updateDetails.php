<?php
include 'includes/included_files.php';
?>

<div class="update-details container py-5">
    <div class="form-group row">
        <label class="col-md-3">Email: </label>
        <input type="email" value="<?php echo $userLoggedIn->getEmail(); ?>" name="upd_Email" class="upd_Email col-md-9">
    </div>
    <div class="form-group row">
        <button class="user-buttons-2" onclick="updateEmail('upd_Email')">  Update Email </button>
    </div>
    <hr class="hr-style my-5">
    <div class="form-group row">
        <label class="col-md-3"> Current Password: </label>
        <input type ="password" name = "curr_password" class="current_pass  col-md-9">
    </div>
    <div class="form-group row">
        <label class="col-md-3"> New Password: </label>
        <input type ="password" name = "new_password" class="new_pass1  col-md-9">
    </div>
    <div class="form-group row">
        <label class="col-md-3"> Confirm Password: </label>
        <input type ="password" name = "confirm_password" class="new_pass2  col-md-9">
    </div>
    <div class="form-group row">
        <button class="user-buttons-2" onclick="updatePassword('current_pass','new_pass1','new_pass2')">  Update Password </button>
    </div>
    <hr class="hr-style my-5">

    <div class="form-group row">
    <label class="col-md-3"> Username: </label>
    <input type ="text" name = "username" class="name_upd  col-md-9" value = "<?php echo $userLoggedIn->getProfileName(); ?>">
    </div>
    <div class="form-group row">
        <button class="user-buttons-2" onclick="updateUsername('name_upd')">  Update Username </button>
    </div>
</div>