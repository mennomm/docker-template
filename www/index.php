<?php include 'database.php';

$query = "SELECT * FROM albums";
$result = mysqli_query($conn, $query);
$albums = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_GET['filter']) && isset($_GET['value'])) {
    $filter = $_GET['filter'];
    $value = $_GET['value'];
    $query = "SELECT * FROM music_app WHERE $filter = '$value'";
}
    ?>


    <!DOCTYPE html>
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>de Notenkraker</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <header>
            <?php include 'navbalk.php' ?>
        </header>

 <h1>Welkom bij de Notenkraker</h1>

<div class="album-grid">
  <?php foreach ($albums as $album): ?>
    <div class="album-box">
      <img src="images/<?= $album['image'] ?>" alt="<?= $album['title'] ?>">
      <div class="album-info">
        <h2><?= $album['title'] ?></h2>
        <p class="artist"><?= $album['artist'] ?></p>
        <p class="description"><?= $album['description'] ?></p>
        <div class="tags">
          <span class="genre"><?= $album['genre'] ?></span>
          <span class="tracks"><?= $album['tracks'] ?> tracks</span>
        </div>
        <div class="album-footer">
          <span class="prijs">€<?= $album['price'] ?></span>
          <a href="detail copy.php?id=<?= $album['id'] ?>">meer info →</a>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
    </section>
    <script src="script/javascript.js"></script>
</body>
<footer>

</footer>