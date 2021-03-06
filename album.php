<?php include 'includes/included_files.php';

if (isset($_GET['id'])) {
    $albumID = $_GET['id'];
} else {
    header("Location: landing.php");
}

$album = new Album($con, $albumID);
$artist = $album->getArtist();
$artistId = $artist->getArtistID();
?>


<div class="album-info w-100 pt-5 d-inline-block">
    <div class="left-section">
        <img src="<?php echo $album->getImage(); ?>" class="w-100 img-fluid al-i">
    </div>

    <div class="right-section">
        <p class="al-name"> <?php echo $album->getAlbumName(); ?> </p>
        <p class="al-artist-name" role='link' tabindex='0'
            onclick="openPage('artist.php?id= <?php echo $artistId; ?>')">
            By <?php echo $artist->getArtistName(); ?> </p>
        <span class="al-songs"> <?php echo $album->getNumberofSongs(); ?> songs </span>
    </div>
</div>


<div class="track-list-container pt-5">
    <ul class="tracklist list-unstyled">
        <?php
$songIDArray = $album->getSongIDs();
$i = 1;
foreach ($songIDArray as $songId) {
    $albumsong = new Song($con, $songId);
    $songartist = $albumsong->artist();

    echo "
                <li class='tracklist-row'>
                    <div class='track-count'>
                        <img class='play-s' src='assets/images/icons/play-white.png' alt='play' onclick='setTrack(\"" . $albumsong->SongID() . "\",  tempPlaylist,true)'>
                      <span class='track-no'>" . $i . ".</span>
                    </div>

                    <div class='track-info'>
                        <span class='track-name'>" . $albumsong->title() . "</span>
                        <span class='track-artist' role='link' tabindex='0' onclick= openPage(\"artist.php?id=" . $albumsong->artistID() . "\")>" . $songartist->getArtistName() . "</span>
                    </div>
                    <div class='track-options'>
                        <input type='hidden' class='songId' value='" . $albumsong->songID() . "'>
                        <img src='assets/images/icons/more.png' alt='options' class='options-btn' onclick='showOptionsMenu(this)'>
                    </div>
                    <div class='track-duration'>
                        <span class='duration'> " . $albumsong->duration() . " </span>
                    </div>
                </li>

                ";

    $i += 1;
}
?>

        <script>
        var tempSongIds = '<?php echo json_encode($songIDArray); ?>';
        // console.log("songs:",tempSongIds);
        tempPlaylist = JSON.parse(tempSongIds);
        console.log(tempPlaylist);
        </script>
    </ul>
</div>


<nav class="optionsMenu">
    <input type="hidden" class="songId">
    <?php echo Playlist::getPlaylistsDropdown($con, $userLoggedIn->getEmail()); ?>

</nav>