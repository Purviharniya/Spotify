var currentPlaylist = [];
var shufflePlaylist = [];
var tempPlaylist = [];
var audioElement;
var mousedown=false;
var currentIndex=0;
var repeat=false;
var shuffle = false;
var userLoggedIn='';
var timer;

function openPage(url){

    if(timer != null){
        clearTimeout(timer);
    }

    if(url.indexOf('?')==-1){
        url = url + '?';
    }

    var encodedUrl = encodeURI(url + '&userLoggedIn=' + userLoggedIn);
    $("#main-content").load(encodedUrl);
    $("body").scrollTop(0);
    history.pushState(null,null,url);

}

function formatTime(seconds){
    var time=Math.round(seconds);
    var minutes= Math.floor(time/60);
    var seconds_rem = time-(minutes*60);

    var extra_zero = (seconds_rem<10) ? "0":"";

    return minutes + ":" + extra_zero + seconds_rem;
} 

function updateProgressTime(song){

    $(".progressTime.current").text(formatTime(song.currentTime));
    $(".progressTime.remaining").text(formatTime(song.duration-song.currentTime));

    var progress= song.currentTime/song.duration * 100;

    $(".progressprogress.song").css("width", progress+"%");

}

function playFirstSong(){
    setTrack(tempPlaylist[0],tempPlaylist,true);
}

function updateVolumeProgressBar(audio){
    var volume=audio.volume*100;
    $(".progressprogress.volume").css("width", volume+"%");
}

function Audio(){
    this.currentlyPlaying;
    this.audio = document.createElement('audio');
    this.audio.addEventListener('canplay', function(){

        var duration= formatTime(this.duration);
        $(".progressTime.remaining").text(duration); 

    });

    this.audio.addEventListener("timeupdate", function(){

        updateProgressTime(this);
    });

    this.audio.addEventListener("volumechange", function(){
        updateVolumeProgressBar(this);
    });

    this.audio.addEventListener("ended", function(){
        nextSong();
    })

    this.setTrack = function(track){
        this.currentlyPlaying = track;
        this.audio.src = track.path;
    }

    this.play = function(){
        this.audio.play();
    }

    this.pause = function(){
        this.audio.pause();
    }

    this.settime = function(seconds){
        this.audio.currentTime = seconds;
    }
}


function logout(){
    $.post("includes/handlers/ajax/logout.php", function(){
        location.reload();
        window.location.href = "index.php";
    });


}