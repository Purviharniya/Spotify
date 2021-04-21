<?php  
include("../../config.php");

if(isset($_POST['songID'])){
    $c=0;
    $songID = $_POST['songID'];
    $user=$_SESSION['userLoggedIn'];
    
    $q = mysqli_query($con,"SELECT songid from likedsongs where email='$user'");
    
    $row = mysqli_fetch_array($q);
    
    foreach($row as $song){
        $c=0;
        if($song==$songID){
            $c=1;
        }
    }

    if($c==0)
    {
        $query = mysqli_query($con,"INSERT into likedsongs values('','$user','$songID')");
    }
}
?>