<?php 

include('includes/included_files.php');
include('includes/classes/Genre.php');
if(isset($_GET['id'])){ 
    $genreID= $_GET['id'];
}

else{
    header("Location: landing.php");
}

$genre = new Genre($con, $genreID);
$albumids= $genre->getAlbumIDs();
$genreName = $genre->getGenreName();

// print_r($albumids);

echo "<h2 class='text-center py-5' style='font-family:castellar'>" . ucfirst($genreName). "</h2> 
        <div class='gridviewContainer p-1 text-center'>
";

foreach($albumids as $albumid){

    $q2= mysqli_query($con,"SELECT * from albums where id='$albumid'");

    while($row=mysqli_fetch_array($q2))
    {
        echo "
        
        <span role='link' tabindex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")' class='album-links'>
                    <div class='grid-view-item'>    
                            <img src='" . $row['image'] . "'alt='img' class='album-img'>
                            <div class='album-title grid-view-info text-center'>". $row['title'] . "</div>
                    </div>
                </span>

        
        ";
    }
}

echo "</div>";
?>

