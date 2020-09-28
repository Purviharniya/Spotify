<?php include('includes/header.php'); 

if(isset($_GET['id'])){
    $ambumID= $_GET['id'];
}

else{
    header("Location: landing.php");
}

$albumQuery= mysqli_query($con, "SELECT * FROM albums where id='$ambumID '");
$album = mysqli_fetch_array($albumQuery);
$artistId= $album['artist'];
$artistQuery= mysqli_query($con, "SELECT * from artists where id=' $artistId '");
$artist = mysqli_fetch_array($artistQuery);

echo $album['title'];
echo $artist['name'];



?>






<?php include('includes/footer.php'); ?>