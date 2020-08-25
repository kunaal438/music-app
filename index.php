<?php include("./components/header.php")?>

    <h1 class="heading">you might like this</h1>

    <div class="songs-grid">

        <?php 
            $albumsQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

            while($row = mysqli_fetch_array($albumsQuery)){
                echo "<div class='songs-container'>
                    <a href='album.php?id=".$row['id']."'>
                        <img src='" .$row['artworkPath']."'/> 
                        <p>".$row['title']."</p>
                    </a>
                </div>";
            }
        ?>

    </div>

<?php include("./components/footer.php")?>