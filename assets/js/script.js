var currentPlaylist = [];
var shufflePlaylist = [];
var tempPlaylist = [];
var audioElement;
var mousedown = false;
var currentIndex = 0;
var repeat = false;
var shuffle = false;
var userLoggedIn;
var timer;

$(window).scroll(function() {
	hideOptionsMenu();
});

$(document).click(function(click) {
	var target = $(click.target);

	if(!target.hasClass("item") && !target.hasClass("options-btn")) {
		hideOptionsMenu();
	}
});

$(document).on("change","select.playlist", function(){
    var playlist=$(this).val();
    var songId= $(this).prev(".songId").val();

    // console.log(playlist);
    // console.log(songId);

    $.post("includes/handlers/ajax/addToPlaylist.php", {playlistId: playlist, songId:songId}).done(function(error){

        if(error!=''){
            alert(error);
            return;
        }

        hideOptionsMenu();
        $(this).val("");
    });

});

function removeFromPlaylist(button, playlist){
    var songId = $(button).prevAll(".songId").val();    

    $.post("includes/handlers/ajax/removeFromPlaylist.php", {playlistId: playlist, songId:songId}).done(function(error){

        if(error!=''){
            alert(error);
            return;
        }

        openPage("playlist.php?id="+ playlist);
    });
}

function openPage(url) {

    if (timer != null) {
        clearTimeout(timer);
    }
    if (url != undefined) {
        if (url.indexOf('?') == -1) {
            url = url + '?';
        }
    }

    var encodedUrl = encodeURI(url + '&userLoggedIn=' + userLoggedIn);
    $("#main-content").load(encodedUrl);
    $("body").scrollTop(0);
    history.pushState(null, null, url);

}



window.onpopstate = function (event) {
    console.log("location: " + document.location + ", state: " + JSON.stringify(event.state));
    console.log(typeof document.location.toString());
    openPage(document.location.toString());
};


// var oldURL = "";
// var currentURL = window.location.href;
// function checkURLchange(currentURL){
//     if(currentURL != oldURL){
//         // console.log(currentURL);
//         // console.log(typeof oldURL);
//         openPage(currentURL);
//         oldURL = currentURL;
//     }
//     oldURL = window.location.href;

//     setInterval(function() {
//         checkURLchange(window.location.href);
//     }, 1000);
// }
// checkURLchange();


function showOptionsMenu(button){

    var songId = $(button).prevAll(".songId").val();    

    var menu= $('.optionsMenu');
    menu.find(".songId").val(songId);
    var scrollTop = $(window).scrollTop(); //from top of window to top of document
    var elementOffset = $(button).offset().top; //from top of window
    var top = elementOffset-scrollTop;
    var left = $(button).position().left;

    menu.css({ "top":top +"px", "left":(left+50) +"px", "display":"inline" });

}

function hideOptionsMenu() {
	var menu = $(".optionsMenu");
	if(menu.css("display") != "none") {
		menu.css("display", "none");
	}
}

function updateEmail(emailclass) {
    var userEmail = $('.' + emailclass).val();
    console.log(userEmail);

    $.post("includes/handlers/ajax/updateEmail.php", { userEmail_new: userEmail, userEmail_old: userLoggedIn }).done(function (error) {
        if (error != "") {
            alert(error);
            return;
        }
        openPage("updateDetails.php");
    })
}

function updateUsername(name_class){
    var username= $('.'+name_class).val();

    $.post("includes/handlers/ajax/updateName.php",{username:username,useremail: userLoggedIn}).done(function(error){
        if(error!=""){
            alert(error);
            return;
        }
    openPage("updateDetails.php");
  })
}


function updatePassword(current_pass, new_pass, confirm_pass) {

    var userpass_old = $('.' + current_pass).val();
    var userpass_new = $('.' + new_pass).val();
    var userpass_confirm = $('.' + confirm_pass).val();
    var error_checker=1;

    if(!(/#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#/).test(userpass_new)){
        error_checker=1; //password matches validation
        // $pass1Er="Invalid Password";
        console.log("yes");
    }
    else{
        error_checker=0;
        console.log("no");
    }

    if( userpass_new != userpass_confirm){
        error_checker=0; //both passwords are different
        // $pass2Er="Both passwords don't match! ";
    } 
    
    if(error_checker==1)
    {
        $.post("includes/handlers/ajax/updatePassword.php", {userpass_new: userpass_new, userpass_old: userpass_old,userEmail:userLoggedIn}).done(function (error) {
            if (error != "") {
                alert(error);
                return;
            }
            openPage("updateDetails.php");
        });
    }
}

function createPlaylist() {
    var name = prompt("Please Enter The Name of New Playlist:");
    if (name != null) {
        console.log(name);
        //ajax call to create playlist
        $.post("includes/handlers/ajax/createPlaylist.php", { playlistName: name, useremail: userLoggedIn }).done(function (error) {
            // console.log(userLoggedIn);
            if (error != "") {
                alert(error);
                return;
            }
            openPage("yourmusic.php");
        });
    }
}

function deletePlaylist(id) {
    var prompt = confirm("Are you sure you want to delete this playlist?");
    if (prompt == true) {
        //ajax call to delete playlist
        $.post("includes/handlers/ajax/deletePlaylist.php", { playlistID: id }).done(function (error) {
            // console.log(userLoggedIn);
            if (error != "") {
                alert(error);
                return;
            }
            openPage("yourmusic.php");
        });
    }
}


function formatTime(seconds) {
    var time = Math.round(seconds);
    var minutes = Math.floor(time / 60);
    var seconds_rem = time - (minutes * 60);

    var extra_zero = (seconds_rem < 10) ? "0" : "";

    return minutes + ":" + extra_zero + seconds_rem;
}

function updateProgressTime(song) {

    $(".progressTime.current").text(formatTime(song.currentTime));
    $(".progressTime.remaining").text(formatTime(song.duration - song.currentTime));

    var progress = song.currentTime / song.duration * 100;

    $(".progressprogress.song").css("width", progress + "%");

}

function playFirstSong() {
    setTrack(tempPlaylist[0], tempPlaylist, true);
}

function updateVolumeProgressBar(audio) {
    var volume = audio.volume * 100;
    $(".progressprogress.volume").css("width", volume + "%");
}

function Audio() {
    this.currentlyPlaying;
    this.audio = document.createElement('audio');
    this.audio.addEventListener('canplay', function () {

        var duration = formatTime(this.duration);
        $(".progressTime.remaining").text(duration);

    });

    this.audio.addEventListener("timeupdate", function () {

        updateProgressTime(this);
    });

    this.audio.addEventListener("volumechange", function () {
        updateVolumeProgressBar(this);
    });

    this.audio.addEventListener("ended", function () {
        nextSong();
    })

    this.setTrack = function (track) {
        this.currentlyPlaying = track;
        this.audio.src = track.path;
    }

    this.play = function () {
        this.audio.play();
    }

    this.pause = function () {
        this.audio.pause();
    }

    this.settime = function (seconds) {
        this.audio.currentTime = seconds;
    }
}


function logout() {
    $.post("includes/handlers/ajax/logout.php", function () {
        location.reload();
        window.location.href = "index.php";
    });


}