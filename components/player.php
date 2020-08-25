<div class="player-container">

    <div class="album-container">
        <img src="assets/img/landing-banner.jpg" alt="" class="album-cover">
        <div>
            <p class="title">song title</p>
            <p class="artist">artist</p>
        </div>
    </div>
    <div class="player">
        <div class="controls">
            <i class="fas fa-random"></i>
            <i class="fas fa-backward"></i>
            <i class="far fa-play-circle"></i>
            <i class="far fa-pause-circle"></i>
            <i class="fas fa-forward"></i>
            <i class="fas fa-sync-alt"></i>
        </div>

        <div class="seek-bar-container">
            <span class="time-span">00:00/00:00</span>
            <input type="range" id="seekBar" max="100" value="0">
        </div>

    </div>
    <div class="volume-bar-container">
        <i class="fas fa-volume-up"></i>
        <input type="range" class="volume-bar" id="volumeBar" max="100" value="100">
    </div>

</div>