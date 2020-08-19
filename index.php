<?php
// include('./config.php');

// if(isset($_SESSION['userLoggedIn'])){
//     // $user = $_SESSION['userLoggedIn'];
//     session_destroy();
// }else{
//     header('Location: form.php');
// }

// if(isset($_POST['logOut'])){
//     session_destroy();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slotify : Listen Songs For Free</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
    <!-- welcome <?php echo $user ?> -->

    <div class="side-nav">
        <a href="index.php"><img src="assets/img/logo.png" alt="spotify" class="logo"></a>

        <div style="position: relative; width: 80%;display: block;margin: auto">
            <input type="text" placeholder="search" class="search-box">
            <i class="fas fa-search"></i>
        </div>
        <a class="links" href="browse.php">browse</a>
        <a class="links" href="music.php">your music</a>
        <a class="links" href="profile.php">kunaal</a>
    </div>

    <!-- player -->

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

    <!-- player ending -->

</body>

</html>