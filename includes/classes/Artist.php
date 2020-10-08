<?php

class Artist{
    private $con;
    private $id;

    public function __construct($con,$id){
        $this->con=$con;
        $this->id=$id;
    }

    public function getArtistID(){
        return $this->id;
    }

    public function getArtistName(){
        $artistQuery= mysqli_query($this->con, "SELECT name from artists where id=' $this->id '");
        $artist = mysqli_fetch_array($artistQuery);

        return $artist['name'];
    }
    
    public function getSongIDs(){
        $query= mysqli_query($this->con, "SELECT id from songs where artist='$this->id' ORDER BY plays ASC ");

        $array = array();

        while($row= mysqli_fetch_array($query)){
            array_push($array, $row['id']);
        }

        return $array;
    }
}

?>