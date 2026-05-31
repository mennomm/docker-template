<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the fitness program</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

            <?php include 'navbalk.php'; ?>


    <!-- Main Content -->
    <div class="main-content">
        <!-- Hero Section -->
        <div class="hero">
            <div class="hero-inner">
                <h1>meer informatie over deze fitnessles</h1>
                <p></p>
            </div>
        </div>

        <!-- Card Grid -->
        <div class="card-section">
            <h2></h2>
            <div class="card-grid">
                <?php include 'detailconnectie.php'; ?>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="footer-inner">
                <div>
                    <h4>Over Ons</h4>
                    <p class="text-muted"></p>
                </div>
                <div>
                    <h4>Snelle Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Verzameling</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contact</h4>
                    <p class="text-muted">Email: info@pokemon-verzameling.nl</p>
                    <p class="text-muted">Tel: +31 (0)6 12345678</p>
                    <p class="text-muted">Locatie: Amsterdam, Nederland</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>