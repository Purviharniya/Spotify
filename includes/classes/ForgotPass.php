<?php

class Forgot{
    private $con;
    private $email;

    public function __construct($con,$email){
        $this->con=$con;
        $this->email=$email;
    }

}



?>