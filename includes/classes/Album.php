<?php 

class Album{
    private $con;  // DB CONNECTION
    private $id;  //ALBUM ID
    private $albumname;
    private $artistid;
    private $genre;
    private $image;

    public function __construct($con,$id){
        $this->con = $con;
        $this->id = $id;

        $albumQuery = mysqli_query($this->con, "SELECT * FROM albums where id='$this->id '");
        $album = mysqli_fetch_array($albumQuery);

        $this->albumname = $album['title'];
        $this->artistid = $album['artist'];
        $this->genre = $album['genre'];
        $this->image = $album['image'];


    }

    public function getAlbumName(){
        return $this->albumname;
    }

    public function getImage(){
        return $this->image;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getArtist(){
        return new Artist($this->con, $this->artistid);
    }

    public function getNumberofSongs(){
        $query= mysqli_query($this->con, "SELECT id from songs where album='$this->id' ");   //select count(*) from songs where album='$this->id'
        return mysqli_num_rows($query);
    }

    public function getSongIDs(){
        $query= mysqli_query($this->con, "SELECT id from songs where album='$this->id' ORDER BY albumOrder ASC ");

        $array = array();

        while($row= mysqli_fetch_array($query)){
            array_push($array, $row['id']);
        }

        return $array;
    }

}


?>