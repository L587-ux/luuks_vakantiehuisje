<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews bekijken</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS-bestanden/app.css">
    <link rel="stylesheet" href="../CSS-bestanden/reviews.css">
</head>

<body class="reviews">
    <div id="wrapper">
        <div class="figure">
            <a href="Homepage.php"><img class="logo" src="../Afbeeldingen/landallogo.png" alt="Logo Landal"></a>
        </div>
        <header>
            <h1>Reviews</h1>
        </header>
        <div class="nav-link" id="overnachten">
            <a href="Overnachten.php">
                <p>
                    overnachten
                </p>
            </a>
        </div>
        <div class="nav-link" id="omgeving">
            <a href="Omgeving.php">
                <p>
                    omgeving
                </p>
            </a>
        </div>
        <div class="nav-link" id="faciliteiten">
            <a href="Faciliteiten.php">
                <p>
                    faciliteiten
                </p>
            </a>
        </div>
        <div class="nav-link" id="reserveren">
            <a href="Reserveren.php">
                <p>
                    reserveren
                </p>
            </a>
        </div>
    </div>

    <section id="reviews">

        <?php
        $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'root', 'usbw');

        $sql = "SELECT * FROM review";

        $result = $db->query($sql);

        foreach ($result as $review) {
            $titel = $review['titel'];
            $inhoud = $review['inhoud'];
            $auteur = $review['auteur'];
            $sterren = $review['sterren'];

            echo "
        <div class='review-card'>
            <h3 class='titel'>$titel</h3>
            <p class='inhoud'>
                $inhoud
            </p>
            <ul class='sterren'>";
            for ($i = 0; $i < $sterren; $i++) {
                echo "<li><i class='bi bi-star-fill'></i></li>";
            }
            echo "
            </ul>
            <div class='auteur'>$auteur</div>
        </div>
        ";
        }
        $db = null;
        ?>

    </section>
    <a id="review-link" href="reviewen.php">Laat een review achter!</a>
</body>

</html>