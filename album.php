<?php include("./components/header.php");

    if (isset($_GET['id'])) {
        $albumId = $_GET['id'];
    } else {
        header("Location: index.php");
    }
    $album = new Album($con, $albumId);
    $artist = $album->getArtist();
    if (!$album->getTitle()) {
        header("Location: index.php");
    }
?>

    <div class="album-info">
        <img src="<?php echo $album->getArtworkPath()?>" alt="">
        <div class="right-side">
            <h1><?php echo $album->getTitle()?></h1>
            <p class="artist">-- By <?php echo $artist->getName()?></p>
            <p class="total-song"><?php echo $album->getTotalSong()?> song</p>
        </div>
    </div>

<?php include("./components/footer.php") ?>