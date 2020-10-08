<?php

$songQ= mysqli_query($con, "SELECT id from songs ORDER BY RAND() LIMIT 10");
$resultArray=array();

while($row = mysqli_fetch_array($songQ)){
    array_push($resultArray,$row['id']);
}

$jsonArray= json_encode($resultArray);

?>

<script>
$(document).ready(function(){

    var newPlaylist = <?php echo $jsonArray; ?>;
    audioElement= new Audio();
    setTrack(newPlaylist[0],newPlaylist,false);
    updateVolumeProgressBar(audioElement.audio);

    $("#nowPlayingBarContainer").on("mousedown touchstart mousemove touchmove", function(e){
        e.preventDefault();   //stop this for mobile devices
    });

    // PROGRESS BAR IMPLEMENTATION
    $(".playBar-container .progressbar").mousedown(function(){
        mousedown = true;
    });

    $(".playBar-container .progressbar").mousemove(function(e){
        if(mousedown==true){
        //move the progress as per the position of the mouse
        timeOffset(e, this);
        }
    });

    $(".playBar-container .progressbar").mouseup(function(e){
        timeOffset(e, this);
    });

    // VOLUME BAR IMPLEMENTATION
    $(".volume-bar .progressbar").mousedown(function(){
        mousedown = true;
    });

    $(".volume-bar .progressbar").mousemove(function(e){
        if(mousedown==true){
        //move the volume bar as per the position of the mouse
            var percent = e.offsetX / $(this).width();

            if (percent >=0 && percent<=1){
                audioElement.audio.volume = percent;
            }
        }
    });

    $(".volume-bar .progressbar").mouseup(function(e){
        var percent = e.offsetX / $(this).width();
        if (percent >=0 && percent<=1){
            audioElement.audio.volume = percent;
        }
    });

    $(document).mouseup(function(){
        mousedown=false;        
    });

})

console.log(<?php echo $jsonArray; ?> ); 

function timeOffset(mouse, progressbar){
    var percent = mouse.offsetX/ $(progressbar).width() * 100;
    var seconds= audioElement.audio.duration * (percent / 100);
    audioElement.settime(seconds);
}

function prevSong(){
    if(audioElement.audio.currentTime>=5 || currentIndex==0){
        audioElement.settime(0);
    }
    else{
        currentIndex--;
        setTrack(currentPlaylist[currentIndex],currentPlaylist,true);
    }
}

function nextSong(){
    if(repeat==true){
        audioElement.settime(0);
        playSong();
        return;
    }

    if(currentIndex == currentPlaylist.length - 1){
        currentIndex=0;
    }
    else{
        currentIndex++;
    }

    var SongtoPlay = shuffle ? shufflePlaylist[currentIndex] : currentPlaylist[currentIndex];
    setTrack(SongtoPlay, currentPlaylist, true);
}

function playSong(){

    if(audioElement.audio.currentTime==0){
        $.post("includes/handlers/ajax/updatePlays.php", {songID: audioElement.currentlyPlaying.id } );
    }
    $(".controlButton.playButton").hide();
    $(".controlButton.pauseButton").show();
    audioElement.play();
}

function pauseSong(){
    $(".controlButton.playButton").show();
    $(".controlButton.pauseButton").hide();
    audioElement.pause();
}

function setrepeat(){
    repeat = !repeat;
    var image = repeat ? "repeat-active.png" : "repeat.png";
    $(".repeatbt-i").attr("src", "assets/images/icons/"+image);

}
function setmute(){
    audioElement.audio.muted  = !audioElement.audio.muted; 
    var image = audioElement.audio.muted ? "volume-mute.png" :  "volume.png" ;
    $(".volumebt-i").attr("src", "assets/images/icons/"+image);
}

function setshuffle(){
    shuffle  = !shuffle; 
    var image = shuffle ? "shuffle-active.png" :  "shuffle.png" ;
    $(".shufflebt-i").attr("src", "assets/images/icons/"+image);

    if(shuffle==true){
        //randomize the song array
        shuffleSongArray(shufflePlaylist);
        currentIndex = shufflePlaylist.indexOf(audioElement.currentlyPlaying.id);
    }
    else{
        //de-randomize array and deactivate shuffle
        currentIndex = currentPlaylist.indexOf(audioElement.currentlyPlaying.id);
    }
}

function shuffleSongArray(a){
    var j,x,i;
    for(i=a.length;i;i--){
        j=Math.floor(Math.random()*i);
        x=a[i-1];
        a[i-1]=a[j];
        a[j]=x;
    }
}

function setTrack(trackID,newPlaylist,play){

if(newPlaylist!=currentPlaylist){
    currentPlaylist=newPlaylist;
    shufflePlaylist= currentPlaylist.slice();
    shuffleSongArray(shufflePlaylist);
}

if(shuffle==true){
    currentIndex= shufflePlaylist.indexOf(trackID);
}
else{
    currentIndex= currentPlaylist.indexOf(trackID);
}

pauseSong();

$.post("includes/handlers/ajax/getSongJson.php" , {songID:trackID} , function(data){

    var track= JSON.parse(data);
    console.log(track);

    $(".trackname span").text(track.title);
    $(".trackname span").attr("onclick", "openPage('album.php?id=" + track.album + "')");

    $(".albumlink img").attr("src", track.image);
    $(".albumlink img").attr("onclick", "openPage('album.php?id=" + track.album + "')");


    $.post("includes/handlers/ajax/getArtistJson.php" , { artistID:track.artist} , function(artistinfo){
        var artist=JSON.parse(artistinfo);
        $(".artistname span").text(artist.name);
        $(".artistname span").attr("onclick", "openPage('artist.php?id=" + artist.id + "')");
    });

    audioElement.setTrack(track);
    if(play==true){
    playSong(); //works only with browsers that support autoplay
    }
});

}

</script>

<div id="nowPlayingBarContainer">
            <div class="row py-4 nowPlayingBar">

                <div class="col-12 col-md-3 bar-left content py-1 pl-4">
                    <span class="albumlink">
                        <img src="" class="albumArtwork" role="link" tabindex="0">
                    </span>
                    <div class="track-info">
                        <span class="trackname">
                            <span role="link" tabindex="0"></span>
                        </span>
                        <span class="artistname">
                            <span role="link" tabindex="0"></span>
                        </span>
                    </div>
                </div> 

                <div class="col-12 col-md-6 py-1 px-5 d-flex flex-column content">
                    <div class="controlButton-container text-center">
                        <button class="controlButton shuffleButton" title="Shuffle button" onclick="setshuffle()"> 
                            <img src="assets/images/icons/shuffle.png" alt="shuffle" class="shufflebt-i">
                        </button>
                        <button class="controlButton previousButton" title="Previous button" onclick="prevSong()"> 
                            <img src="assets/images/icons/previous.png" alt="previous" class="previousbt-i">
                        </button>
                        <button class="controlButton playButton" title="Play button" onclick="playSong()"> 
                            <img src="assets/images/icons/play.png" alt="play" class="playbt-i">
                        </button>
                        <button class="controlButton pauseButton" title="Pause button" style="display:none;" onclick="pauseSong()"> 
                            <img src="assets/images/icons/pause.png" alt="pause" class="pausebt-i">
                        </button>
                        <button class="controlButton nextButton" title="Next button" onclick="nextSong()"> 
                            <img src="assets/images/icons/next.png" alt="next" class="nextbt-i">
                        </button>
                        <button class="controlButton repeatButton" title="Repeat button" onclick="setrepeat()"> 
                            <img src="assets/images/icons/repeat.png" alt="repeat" class="repeatbt-i">
                        </button>
                    </div>
                    <div class="playBar-container d-flex justify-content-center pt-2">
                        <span class="progressTime current pr-3">0:00</span> 

                        <div class="progressbar">
                            <div class="progressbar-bg">
                                <div class="progressprogress song"></div>
                            </div>
                        </div>

                        <span class="progressTime remaining pl-3"></span> 
                    </div>
                </div>

                <div class="col-12 col-md-3 d-none d-md-block content align-self-center">
                    <div class="volume-bar d-flex justify-content-center">

                        <button class='controlButton volumeButton' title="Volume button" onclick="setmute()">
                            <img src="assets/images/icons/volume.png" alt="volume" class="volumebt-i">
                        </button>

                        <div class="progressbar">
                            <div class="progressbar-bg">
                                <div class="progressprogress volume"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>