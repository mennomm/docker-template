<?php
include 'database.php';

$albumId = $_GET['id'];
$query = "SELECT * FROM albums WHERE id = $albumId";
$result = mysqli_query($conn, $query);
$album = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $album['title']; ?> – The Fitness Program</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">

    <!-- Top: titel + afbeelding -->
    <div class="card-top">
        <div class="card-title-block">
            <span class="label">album</span>
            <h1 class="title"><?php echo $album['title']; ?></h1>
            <p class="subtitle"><?php echo $album['artist']; ?></p>
        </div>
        <div class="card-image-block">
            <img
                src="images/<?php echo $album['image']; ?>"
                alt="<?php echo $album['title']; ?>"
                class="card-image"
            >
        </div>
    </div>

    <div class="divider"></div>

    <!-- Info Grid -->
    <div class="info-grid">
        <div class="info-col">
            <div class="info-item">
                <span class="info-label">Artiest</span>
                <span class="info-value"><?php echo $album['artist']; ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Genre</span>
                <span class="info-value"><?php echo $album['genre']; ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Uitgebracht</span>
                <span class="info-value"><?php echo $album['release_year']; ?></span>
            </div>
        </div>
        <div class="info-col">
            <div class="info-item">
                <span class="info-label">Aantal tracks</span>
                <span class="info-value"><?php echo $album['tracks']; ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Toegevoegd op</span>
                <span class="info-value"><?php echo $album['added_at']; ?></span>
            </div>
        </div>
        <div class="info-col">
            <div class="info-item">
                <span class="info-label">Prijs</span>
                <span class="info-value price">€<?php echo $album['price']; ?></span>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- Beschrijving -->
    <div class="description-block">
        <h3 class="description-title">Beschrijving</h3>
        <p class="description-text"><?php echo $album['description']; ?></p>
    </div>

    <!-- Terug link -->
    <div class="back-link-wrap">
        <a href="index.php" class="back-link">← terug naar overzicht</a>
    </div>

</div>

</body>
</html>