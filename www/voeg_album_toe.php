<?php
if(isset($_GET['melding'])){
    $melding= $_GET['melding'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maak les</title>
</head>

<body>
    <h1>Maak les aan</h1>

    <?php
    if(!empty($melding)){
        echo '<p style="color : red">'. $melding . '</p>';
    }
    ?>
    <form action="maak_les_process.php" method="post">

        <div class="form-group">
            <label for="naam">Naam les</label>
            <input type="text" name="naam" id="naam_les" placeholder="volleyball">
        </div>

        <div class="form-group">
            <label for="thumbnail_url">afbeelding</label>
            <input type="text" name="afbeelding" id="afbeelding" placeholder="https://example.com/image.jpg">
        </div>

        <button type="submit">Maak les aan</button>
    </form>
</body>

</html>