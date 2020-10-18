<?php include 'includes/included_files.php';

if (isset($_GET['id'])) {
    $playlistID = $_GET['id'];
} else {
    header("Location: landing.php");
}

$playlist = new Playlist($con, $playlistID);
$owner = new User($con, $playlist->getOwner());

?>


<div class="album-info w-100 pt-5 d-inline-block">
    <div class="left-section ml-4 ">
        <img src="assets/images/icons/playlist.png" class="w-100 img-fluid al-i p-4">
    </div>

    <div class="right-section ml-4">
        <p class="al-name"> <?php echo $playlist->getName(); ?> </p>
        <p class="al-artist-name"> By <?php echo $playlist->getOwner(); ?> </p>
        <p class="al-songs"> <?php echo $playlist->getNumberofSongs(); ?> songs </p>
        <button class='user-buttons-1' onclick="deletePlaylist(<?php echo $playlistID; ?>)" >Delete Playlist</button>
    </div>
</div>


<div class="track-list-container pt-5">
    <ul class="tracklist list-unstyled">
        <?php
$songIDArray = $playlist->getSongIDs();
$i = 1;
foreach ($songIDArray as $songId) {
    $playlistsong = new Song($con, $songId);
    $songartist = $playlistsong->artist();

    echo "
                <li class='tracklist-row'>
                    <div class='track-count'>
                        <img class='play-s' src='assets/images/icons/play-white.png' alt='play' onclick='setTrack(\"" . $playlistsong->SongID() . "\",  tempPlaylist,true)'>
                      <span class='track-no'>" . $i . ".</span>
                    </div>

                    <div class='track-info'>
                        <span class='track-name'>" . $playlistsong->title() . "</span>
                        <span class='track-artist' role='link' tabindex='0' onclick= openPage(\"artist.php?id=" . $playlistsong->artistID() . "\")>" . $songartist->getArtistName() . "</span>
                    </div>
                    <div class='track-options'>
                        <img src='assets/images/icons/more.png' alt='options' class='options-btn'>
                    </div>
                    <div class='track-duration'>
                        <span class='duration'> " . $playlistsong->duration() . " </span>
                    </div>
                </li>

                ";

    $i += 1;
}
?>

        <script>
            var tempSongIds = '<?php echo json_encode($songIDArray); ?>';
            tempPlaylist = JSON.parse(tempSongIds);
            console.log(tempPlaylist);
        </script>
    </ul>
</div>
