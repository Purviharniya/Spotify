<?php 

class Song{
    private $con;
    private $id;
    private $mysqli_data;
    private $title;
    private $artistid;
    private $albumid;
    private $genre;
    private $duration;
    private $path;
    private $songimg;

    public function __construct($con,$id){
        $this->con=$con;
        $this->id=$id;

        $query= mysqli_query($this->con, "SELECT * FROM songs WHERE id= ' $this->id '");
        $this->mysqli_data= mysqli_fetch_array($query);
        $this->title= $this->mysqli_data['title'];
        $this->artistid= $this->mysqli_data['artist'];
        $this->albumid= $this->mysqli_data['album'];
        $this->genre= $this->mysqli_data['genre'];
        $this->duration= $this->mysqli_data['duration'];
        $this->path= $this->mysqli_data['path'];
        $this->songimg= $this->mysqli_data['image'];
    }

    public function title(){
        return $this->title;
    }
    public function songID(){
        return $this->id;
    }
    public function artist(){
        return new Artist($this->con,$this->artistid);
    }
    public function artistID(){
        return $this->artistid;
    }
    public function album(){
        return new Album($this->con,$this->albumid);
    }
    public function genre(){
        return $this->genre;
    }
    public function duration(){
        return $this->duration;
    }
    public function path(){
        return $this->path;
    }
    public function songimg(){
        return $this->songimg;
    }
    
}


?>