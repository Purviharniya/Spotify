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

    }

    private function validateProfileName($pn){

    }

    private function validateContact($no){

    }

    private function validateDOB($d,$m,$y){

    }

    private function validateTnC($tnc){

    }

}

?>