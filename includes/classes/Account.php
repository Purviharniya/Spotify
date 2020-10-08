<?php 

class Account{

    private $errorArray;
    private $curr_year;
    private $con;

    public function __construct($con){
        $this->con=$con;
        $this->errorArray = array();
        $this->curr_year  = date("Y");
    }

    public function login($em,$pw){
        $pw=md5($pw);
        $query = mysqli_query($this->con, "SELECT * from users where email='$em' AND password='$pw'");

        if(mysqli_num_rows($query)==1){
            return true;
        }
        else{
            $q=mysqli_query($this->con, "SELECT * from users where email='$em'");
            if(mysqli_num_rows($q)!=1){
                array_push($this->errorArray, Constants::$pleaseSignup);
                return false;
            }
            array_push($this->errorArray, Constants::$loginFailed);
            return false;
        }
    }

    public function register($userEmail,$password1,$password2,$profileName,$contactNo,$date,$month,$year,$tnc){ 
        $this->validateEmail($userEmail);
        $this->validatePasswords($password1,$password2);
        $this->validateProfileName($profileName);
        $this->validateContact($contactNo);
        $this->validateDOB($date,$month,$year);
        $this->validateTnC($tnc);

        if(empty($this->errorArray)){
            //insert to db
            return $this->insertUserDetails($userEmail,$password1,$profileName,$contactNo,$date,$month,$year);
        }
        else{
            return false;
        }

    }

    public function getError($error){
        if(!in_array($error,$this->errorArray)){
            $error="";
        }
        // print_r($this->errorArray);
        return "<div class='error-msg'>$error</div>";
        // return print_r($this->errorArray);
    }

    private function insertUserDetails($em,$pw,$pn,$cn,$dobd,$dobm,$doby){
        $encryptPw= md5($pw);
        $profilePic="assets/images/profile-pics/profilepic.png";
        $date=date("Y-m-d");
        $token = bin2hex(random_bytes(20));
        $result= mysqli_query($this->con, "INSERT INTO users VALUES ('','$pn','$em','$encryptPw','$cn','$dobd','$dobm','$doby','$date','$profilePic','$token')");

        return $result;
    }

    private function validateEmail($em) {

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, Constants::$invalidEmail);
            return;
        }

        //TODO: Check that email hasn't already been used

        $checkEmailQuery= mysqli_query($this->con, "SELECT email from users where email= '$em'");
        if(mysqli_num_rows($checkEmailQuery) !=0){
            array_push($this->errorArray, Constants::$emailAlreadyRegistered);
            return;
        }

    }

    private function validatePasswords($pw1,$pw2){
        if(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pw1)){
            array_push($this->errorArray,Constants::$invalidCreatePassword);
            return;
        }

        if($pw1 != $pw2){
            array_push($this->errorArray, Constants::$passwordsNoMatch);
            return;
        }

    }

    private function validateProfileName($pn){
        if(strlen($pn) >25 || strlen($pn) < 3 ){
            array_push($this->errorArray, Constants::$invalidProfName);
            return;
        }
    }

    private function validateContact($no){
        if(strlen($no)!=10){
            array_push($this->errorArray,Constants::$contactLengthWrong);
            return;
        }

        if(!preg_match('/^[6-9]\d{9}$/', $no)){
            array_push($this->errorArray,Constants::$contactStartWrong);
            return;
        }

    }

    private function validateDOB($d,$m,$y){
        if (!preg_match("/^[0-9]*$/",$y))
        {
            array_push($this->errorArray,Constants::$invalidDOBYear);
            return;
        }

        if((($this->curr_year-$y) >= 100 ) || ($y>=$this->curr_year)){
            array_push($this->errorArray, Constants::$invalidDOBYear);
            return;
        }

        if($m == '' || empty($m)){
            array_push($this->errorArray,Constants::$invalidDOBMonth);
            return;
        }

        if(!checkdate($m,$d,$y)){
            array_push($this->errorArray, Constants::$invalidDOBDate);
            return;
        }

    }

    private function validateTnC($tnc){
        if(empty($tnc) || $tnc==''){
            array_push($this->errorArray, Constants::$AcceptTnC);
            return;
        }
    }

}

?>