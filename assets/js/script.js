var currentPlaylist = [];
var audioElement;

function formatTime(seconds){
    var time=Math.round(seconds);
    var minutes= Math.floor(time/60);
    var seconds_rem = time-(minutes*60);
    var extra_zero = (seconds<10) ? "0":"";
    return minutes + ":" + extra_zero +seconds_rem;
}

function updateProgressTime(song){

    $(".progressTime.current").text(formatTime(song.currentTime));
    $(".progressTime.remaining").text(formatTime(song.duration-song.currentTime));

    var progress= song.currentTime/song.duration * 100;

    $(".progressprogress.song").css("width", progress+"%");

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
}