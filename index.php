<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
    <?php 
       include "database.php";
    ?>
</head>

<body>
    <header>
       <div class="container">
          <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="logo">
       </div>
    </header>

    <main>
       <div class="dischi-container">
            <?php foreach ($dischi as $song) {
                echo "<div class='card'>";
                    echo '<img src="' . $song["poster"] . '"/>';
                    echo "<h3>" . $song["title"] . "</h3>";
                    echo "<span class='author'>" . $song["author"] . "</span>";
                    echo "<span>" . $song["genre"] . "</span>";
                    echo "<span class='year'>" . $song["year"] . "</span>";
                echo "</div>";
            } ?>
       </div>
    </main>

</body>
</html>