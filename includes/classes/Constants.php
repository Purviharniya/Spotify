<?php 

class Constants{
    
    //register error msgs
    public static $invalidEmail = "Email is invalid!";
    public static $invalidCreatePassword = "Password should have 8-20 characters, atleast one Uppercase letter, atleast one number and atleast one special character!";
    public static $passwordsNoMatch = "Your passwords don't match.";
    public static $invalidProfName = "Profile name should must be between 3 and 25 characters.";
    public static $contactLengthWrong =  "Contact number must have 10 digits only!";
    public static $contactStartWrong = "Contact number must start with 6,7,8 or 9!";
    public static $invalidDOBYear = "Invalid Year ";
    public static $invalidDOBMonth = "Month is required ";
    public static $invalidDOBDate = "Invalid date of birth ";
    public static $AcceptTnC =  "Please accept to the terms & conditions";
    public static $emailAlreadyRegistered = "This email is already registered.";
    
    //login error msgs
    public static $loginFailed = "Your email or password was incorrect";

}

?>