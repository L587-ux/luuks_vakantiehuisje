<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review opslaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS-bestanden/reviews.css">
</head>

<body class="review-opslaan">
    <div class="review-wrapper">
        <?php
        try {
            // Verbinding maken
            $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'root', 'usbw');

            // De SQL opdracht 
            $sql = "INSERT INTO review (titel, inhoud, auteur, sterren)
            VALUES (?,?,?,?)"; // Maak een SQL frame statement met placeholders
            $stmt = $db->prepare($sql); // Maak de SQL statement klaar voor gebruik
            $resultaat = $stmt->execute([$_POST["titel"], $_POST["inhoud"], $_POST["auteur"], $_POST["sterren"]]);
            // Voer de SQL statement uit met de data uit de HTML form

            // Resultaat

            $titel = $_POST['titel'];
            $inhoud = $_POST['inhoud'];
            $auteur = $_POST['auteur'];
            $sterren = $_POST['sterren'];

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

            echo "<a href='Homepage.php'>Terug naar homepagina<a/><br>";
            echo "<a href='reviews.php'>Bekijk alle reviews</a>";

            // Sluit verbinding
            $db = NULL;
        } catch (PDOException $e) {
            echo $e;
            echo "<hr>";
            echo $sql;
        }
        ?>
    </div>
</body>

</html>