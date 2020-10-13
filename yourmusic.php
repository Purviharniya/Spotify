<?php
include "includes/included_files.php";
?>


<div class="playlistContainer">
    <div class="gridviewContainer p-1 text-center">
        <h1 class="py-5" style="font-family:castellar;">PLAYLISTS</h1>
        <div class="play-btn pb-5">
            <button class="user-buttons" onclick="createPlaylist()">New Playlist</button>
        </div>
    </div>
    <div class='playlists p-4 text-center'>
<?php 

    $email=$userLoggedIn->getEmail();

    $playlistQuery = mysqli_query($con, "SELECT * from playlists where user='$email'");

    if(mysqli_num_rows($playlistQuery)==0)
    {
        echo "<span>You don't have any playlists yet.</span>";
    }

    while($row= mysqli_fetch_array($playlistQuery))
    {
        $playlist = new Playlist($con,$row);

        echo "<span role='link' tabindex='0' onclick='openPage(\"playlist.php?id=" . $playlist->getId() . "\")' class='album-links'>
                <div class='grid-view-item'>   
                    <div class='playlist-img-div'> 
                        <img src='assets/images/icons/playlist.png'alt='img' class='playlist-img p-3'>
                    </div>
                        <div class='album-title grid-view-info text-center'>". ucfirst($playlist->getName()) . "</div>
                </div>
            </span>";
    }
?>
</div>
</div>