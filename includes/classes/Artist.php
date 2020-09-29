<?php

class Artist{
    private $con;
    private $id;

    public function __construct($con,$id){
        $this->con=$con;
        $this->id=$id;
    }

    public function getArtistName(){
        $artistQuery= mysqli_query($this->con, "SELECT name from artists where id=' $this->id '");
        $artist = mysqli_fetch_array($artistQuery);

        return $artist['name'];
    }
    
}

?>