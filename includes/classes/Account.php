<?php 

class Account{

    private $errorArray;

    public function __construct(){
        $this->errorArray = array();
    }

    public function register($userEmail,$password1,$password2,$profileName,$contactNo,$date,$month,$year,$tnc){

        $this->validateEmail($userEmail);
        $this->validatePasswords($password1,$password2);
        $this->validateProfileName($profileName);
        $this->validateContact($contactNo);
        $this->validateDOB($date,$month,$year);
        $this->validateTnC($tnc);
    }

    private function validateEmail($em){
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, "Enter a valid Email");
        return;
        }

        //TODO: check if email already exists
    }

    private function validatePasswords($pw1,$pw2){
        if(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pw1)){
            array_push($this->errorArray, "Password should have 8-20 characters, atleast one Uppercase letter, atleast one number and atleast one special character!");
            return;
        }

        if($pw1 != $pw2){
            array_push($this->errorArray, "Your passwords don't match.");
            return;
        }

    }

    private function validateProfileName($pn){
        if(strlen($pn) >25 || strlen($pn) < 3 ){
            array_push($this->errorArray, "Profile name should must be between 3 and 25 characters.");
            return;
        }
    }

    private function validateContact($no){

    }

    private function validateDOB($d,$m,$y){

    }

    private function validateTnC($tnc){

    }

}

?>