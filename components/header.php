<?php
include('./config.php');
include('/Xampp/htdocs/Spotify/classes/Artist.php');
include('/Xampp/htdocs/Spotify/classes/Album.php');
include('/Xampp/htdocs/Spotify/classes/Song.php');

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

    <link rel="stylesheet" type="text/css" href="assets/css/component.css">
    <link rel="stylesheet" type="text/css" href="assets/css/album.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
    <!-- welcome <?php echo $user ?> -->
    <?php include("./components/navbar.php") ?>

    <div class="main-container">