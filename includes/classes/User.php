<?php

class User
{
    
    private $con;
    private $email;

    public function __construct($con,$email){
        $this->con=$con;
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getProfileName(){
        $query=mysqli_query($this->con,"SELECT profilename from users where email='$this->email'");
        $row=mysqli_fetch_array($query);
        return $row['profilename'];
    }

    public function getContactNo(){
        $query=mysqli_query($this->con,"SELECT contactno from users where email='$this->email'");
        $row=mysqli_fetch_array($query);

        return $row['contactno'];
    }
}

?>