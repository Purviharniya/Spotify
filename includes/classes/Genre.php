<?php

class Genre{
    private $con;
    private $id;

    public function __construct($con,$id){
        $this->con=$con;
        $this->id=$id;
    }

    public function getGenreID(){
        return $this->id;
    }

    public function getGenreName(){
        $query= mysqli_query($this->con, "SELECT name from genres where id='$this->id'");
        while($row=mysqli_fetch_array($query)){
            return $row['name'];
        }
    }

    // public function getArtistName(){
    //     $artistQuery= mysqli_query($this->con, "SELECT name from artists where id=' $this->id '");
    //     $artist = mysqli_fetch_array($artistQuery);

    //     return $artist['name'];
    // }
    
    public function getAlbumIDs(){
        $query= mysqli_query($this->con, "SELECT albums.id from albums where genre='$this->id'");

        $array = array();

        while($row= mysqli_fetch_array($query)){
            array_push($array, $row['id']);
        }

        return $array;
    }
}

?>