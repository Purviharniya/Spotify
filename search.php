<?php  

include("includes/included_files.php");

if(isset($_GET['term'])){
    $term= urldecode($_GET['term']);
}
else{
    $term="";
}

?>

<div class="searchContainer">

    <input type="text" class="searchInput form-control col-12 col-md-6 offset-md-3" value="<?php echo $term; ?>" placeholder="Search for albums/artists/genres" onfocus='this.value=this.value' >

</div>

<script>

$(".searchInput").focus();

$(function(){
   

    $(".searchInput").keyup(function(){

        clearTimeout(timer);

        timer=setTimeout(function(){
            var val = $(".searchInput").val();
            openPage("search.php?term="+val);
        }, 2000);

    });
});

$(document).ready(function(){
        $(".searchInput").focus();
        var search = $(".searchInput").val();
        $(".searchInput").val('');
        $(".searchInput").val(search);
    });

</script>

<?php if($term == "") exit(); ?>

<div class="track-list-container py-5 borderbottom">

    <h4 class="p-2 pb-4" style="font-family:castellar;"> Songs </h4>
    <ul class="tracklist list-unstyled">
        <?php 

            $songsQuery= mysqli_query($con, "SELECT id FROM songs WHERE title LIKE '%$term%' LIMIT 10 ");

            if(mysqli_num_rows($songsQuery)==0)
            {
                echo "<span>No songs were found matching ". $term. "</span>";
            }

         
            $songarray= array();
            $i=1;
            while($row = mysqli_fetch_array($songsQuery))
            {

                if($i>15){
                    break;
                }

                array_push($songarray, $row['id']);

                $albumsong = new Song($con, $row['id']);
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
                        <input type='hidden' class='songId' value='". $albumsong->songID() ."'>
                        <img src='assets/images/icons/more.png' alt='options' class='options-btn' onclick='showOptionsMenu(this)'>
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
            var tempSongIds = '<?php echo json_encode($songarray); ?>';
            tempPlaylist = JSON.parse(tempSongIds);
            console.log(tempPlaylist);
        </script>
   
        <nav class="optionsMenu">
            <input type="hidden" class="songId">
            <?php echo Playlist::getPlaylistsDropdown($con, $userLoggedIn->getEmail()); ?>
        </nav>

    </ul>   
</div>

<div class="artistsContainer borderbottom py-5">
    <h4 class="p-2 pb-4" style="font-family:castellar;"> Artists </h4>
    <?php 

        $artistsQuery= mysqli_query($con, "SELECT id FROM artists WHERE name LIKE '%$term%' LIMIT 10 ");

        if(mysqli_num_rows($artistsQuery)==0)
        {
            echo "<span>No artists were found matching ". $term. "</span>";
        }
    
        while($row=mysqli_fetch_array($artistsQuery)){

            $artistFound = new Artist($con, $row['id']);

            echo "
            <div class='searchresult-row'>
                <div class='s-artistname'>
                    <span role='link' tabindex='0' onclick='openPage(\"artist.php?id=". $artistFound->getArtistID() ."\")'>"
                    
                   . $artistFound->getArtistName() .
                    
                   "</span>
                </div>
            </div>
            ";

        }
    
    ?>
</div>


<div class="gridviewContainer pt-5">
    <h2 class="p-2 pb-4" style="font-family:castellar;">ALBUMS </h2>
<?php 

    $albumQuery = mysqli_query($con, "SELECT * from albums where title like '%$term%'");
    if(mysqli_num_rows($albumQuery)==0)
    {
        echo "<span>No albums were found matching ". $term. "</span>";
    }

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