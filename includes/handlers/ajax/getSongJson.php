<?php  
include("../../config.php");

if(isset($_POST['songID'])){
    $songID = $_POST['songID'];

    $query = mysqli_query($con,"SELECT * FROM songs where id=' $songID'");
}
?>