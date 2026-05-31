<?php
include 'database.php';

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = "SELECT * FROM fitnesslessen 
              WHERE naam LIKE '%$search%' 
              OR type_workout LIKE '%$search%'";

    $result = mysqli_query($conn, $query);
    $fitnesslessen = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>

        <?php include 'navbalk.php'; ?>

    </header>
    <h1>Zoekresultaten</h1>

    <div class="box">

        <?php foreach ($fitnesslessen as $fitnessles): ?>

            <div class="fitnesscard">
                <img class="zoek-afbeelding" src="images/<?php echo $fitnessles['thumbnail_url']; ?>" alt="<?php echo $fitnessles['naam']; ?>">

                <h2 class="fitness-naam"><?php echo $fitnessles['naam']; ?></h2>
                <p><?php echo $fitnessles['type_workout']; ?></p>
                <p><?php echo $fitnessles['moeilijkheidsgraad']; ?></p>
                <p><?php echo $fitnessles['duur']; ?> minuten</p>
                <a href="detail.php?id=<?php echo $fitnessles['id']; ?>">meer informatie</a>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>