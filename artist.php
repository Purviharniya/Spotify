<?php 

include("includes/included_files.php");

if(isset($_GET['id'])){
    $artistid=$_GET['id'];
}
else{
    header("Location: landing.php");
}

$artist =  new Artist($con,$artistid);

?>

<div class="entityInfo borderbottom pb-5">
    <div class="centerSection">
        <div class="text-center artistInfo">
            <h3 class="ar-artistname py-4"> <?php  echo $artist->getArtistName(); ?> </h3>
            <div class="header-buttons">
                <button class="user-buttons" onclick="playFirstSong()">PLAY</button>
            </div>
        </div>
    </div>
</div>


<div class="track-list-container py-5 borderbottom">
    <h2 class="p-2 pb-4" style="font-family:castellar;"> Most Popular Songs </h2>
    <ul class="tracklist list-unstyled">
        <?php 
            $songIDArray= $artist->getSongIDs();
            $i=1;
            foreach($songIDArray as $songId){
                if($i>5){
                    break;
                }
                $albumsong = new Song($con, $songId);
                $songartist = $albumsong->artist();
                echo "
                <li class='tracklist-row'>
                    <div class='track-count'>
                        <img class='play-s' src='assets/images/icons/play-white.png' alt='play' onclick='setTrack(\"" .$albumsong->SongID() ."\",  tempPlaylist,true)'>
                      <span class='track-no'>". $i . ".</span>
                    </div>
                   
                    <div class='track-info'>
                        <span class='track-name'>". $albumsong->title() . "</span>
                        <span class='track-artist'>". $songartist->getArtistName() . "</span>
                    </div>
                    <div class='track-options'>
                        <img src='assets/images/icons/more.png' alt='options' class='options-btn'>
                    </div>
                    <div class='track-duration'> 
                        <span class='duration'> ". $albumsong->duration() . " </span>
                    </div>
                </li>
                
                ";

                $i+=1;
            }
        ?>

        <script>
            var tempSongIds = '<?php echo json_encode($songIDArray); ?>';
            tempPlaylist = JSON.parse(tempSongIds);
            console.log(tempPlaylist);
        </script>
    </ul>   
</div>


<div class="gridviewContainer pt-5">
    <h2 class="p-2 pb-4" style="font-family:castellar;">POPULAR ALBUMS </h2>
<?php 

    $albumQuery = mysqli_query($con, "SELECT * from albums where artist='$artistid'");

    while($row= mysqli_fetch_array($albumQuery)){
        echo "<span role='link' tabindex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")' class='album-links'>
                <div class='grid-view-item'>    
                        <img src='" . $row['image'] . "'alt='img' class='album-img'>
                        <div class='album-title grid-view-info text-center'>". $row['title'] . "</div>
                </div>
            </span>";
    }
?>

</div>

