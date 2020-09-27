<div id="nowPlayingBarContainer">
            <div class="row py-4 nowPlayingBar">

                <div class="col-12 col-md-3 bar-left content py-1">
                    <span class="albumlink">
                        <img src="assets/images/albumimages/album1.jpg" class="albumArtwork">
                    </span>
                    <div class="track-info">
                        <span class="trackname">
                            <span>Song Name </span>
                        </span>
                        <span class="artistname">
                            <span>Artist Name </span>
                        </span>
                    </div>
                </div> 

                <div class="col-12 col-md-6 py-1 px-5 d-flex flex-column content">
                    <div class="controlButton-container text-center">
                        <button class="controlButton shuffleButton" title="Shuffle button"> 
                            <img src="assets/images/icons/shuffle.png" alt="shuffle" class="shufflebt-i">
                        </button>
                        <button class="controlButton previousButton" title="Previous button"> 
                            <img src="assets/images/icons/previous.png" alt="previous" class="previousbt-i">
                        </button>
                        <button class="controlButton playButton" title="Play button"> 
                            <img src="assets/images/icons/play.png" alt="play" class="playbt-i">
                        </button>
                        <button class="controlButton pauseButton" title="Pause button" style="display:none;"> 
                            <img src="assets/images/icons/pause.png" alt="pause" class="pausebt-i">
                        </button>
                        <button class="controlButton nextButton" title="Next button"> 
                            <img src="assets/images/icons/next.png" alt="next" class="nextbt-i">
                        </button>
                        <button class="controlButton repeatButton" title="Repeat button"> 
                            <img src="assets/images/icons/repeat.png" alt="repeat" class="repeatbt-i">
                        </button>
                    </div>
                    <div class="playBar-container d-flex justify-content-center pt-2">
                        <span class="progressTime current pr-3"> 0.00 </span> 

                        <div class="progressbar">
                            <div class="progressbar-bg">
                                <div class="progressprogress"></div>
                            </div>
                        </div>

                        <span class="progressTime remaining pl-3"> 0.00 </span> 
                    </div>
                </div>

                <div class="col-12 col-md-3 d-none d-md-block content align-self-center">
                    <div class="volume-bar d-flex justify-content-center">

                        <button class='controlButton volumeButton' title="Volume button">
                            <img src="assets/images/icons/volume.png" alt="volume" class="volumebt-i">
                        </button>

                        <div class="progressbar">
                            <div class="progressbar-bg">
                                <div class="progressprogress"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>