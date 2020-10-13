<?php

class Playlist{
    private $con;
    private $id;
    private $name;
    private $owner;

    public function __construct($con,$data){

        if(!is_array($data)){
            //if id is passed to this class
            $query= mysqli_query($con,"SELECT * from playlists where id='$data'");
            $data=mysqli_fetch_array($query);
        }

        $this->con=$con;
        $this->id=$data['id'];
        $this->name=$data['name'];
        $this->owner=$data['user'];
    }

    public function getName(){
        return ucfirst($this->name);
    }

    public function getOwner(){
        $q=mysqli_query($this->con, "SELECT profilename from users where email='$this->owner'");
        $row= mysqli_fetch_array($q);
        return ucfirst($row['profilename']);
    }

    public function getId(){
        return $this->id;
    }

    public function getNumberofSongs(){
        $query= mysqli_query($this->con, "SELECT songid from playlistsongs where playlistid='$this->id'");
        return mysqli_num_rows($query);
    }

    public function getSongIDs(){
        $query= mysqli_query($this->con, "SELECT songid from playlistsongs where playlistid='$this->id' ORDER BY playlistorder ASC ");

        $array = array();

        while($row= mysqli_fetch_array($query)){
            array_push($array, $row['songid']);
        }

        return $array;
    }

}


?>