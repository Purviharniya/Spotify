<?php include('includes/header.php'); 

if(isset($_GET['id'])){
    $albumID= $_GET['id'];
}

else{
    header("Location: landing.php");
}

$album = new Album($con, $albumID);
$artist = $album->getArtist();

// echo $album->getAlbumName();
// echo $artist->getArtistName();
// echo $album->getNumberofSongs();
?>

<div class="album-info row pt-5 -inline-block">
    <div class="col-12 col-md-3">
        <img src="<?php echo $album->getImage(); ?>" class="w-100 img-fluid">
    </div>
    <div class="col-12 col-md-9 px-5 pt-4">
        <p class="al-name"> <?php echo $album->getAlbumName(); ?> </p>
        <p class="al-artist-name"> <?php echo $artist->getArtistName(); ?> </p>
        <p class="al-songs"> <?php echo $album->getNumberofSongs(); ?> songs </p>
    </div>
</div>


<div class="track-list-container">
    <ul>
        <?php 
            $songIDArray= $album->getSongIDs();

            foreach($songIDArray as $songId){
                echo $songId;
            }
        ?>
    </ul>
</div>

<?php include('includes/footer.php'); ?>