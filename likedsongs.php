<?php
include 'includes/included_files.php';

?>
<div class="track-list-container pt-2">
    <div class="text-center p-5">
        <h1>YOUR LIKED SONGS</h1>
    </div>
    <ul class="tracklist list-unstyled">
        <?php

$useremail = $_SESSION['userLoggedIn'];
$q = mysqli_query($con, "SELECT songid from likedsongs where email='$useremail'");
$songIDArray = mysqli_fetch_all($q);
// print_r($songIDArray);
$i = 1;
foreach ($songIDArray as $songId) {
    $albumsong = new Song($con, $songId[0]);
    // print_r($albumsong);
    $songartist = $albumsong->artist();
    // echo $i . "-" . $songId[0] . "<br>";
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
        var tempSongIds = '<?php
$idarray = array();
foreach ($songIDArray as $songid) {
    array_push($idarray, $songid[0]);
}
echo json_encode($idarray);

?>';
        console.log("songs:", tempSongIds);
        tempPlaylist = JSON.parse(tempSongIds);
        console.log(tempPlaylist);
        </script>
    </ul>
</div>


<nav class="optionsMenu">
    <input type="hidden" class="songId">
    <?php echo Playlist::getPlaylistsDropdown($con, $userLoggedIn->getEmail()); ?>
</nav>

<!--  -->