<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS-bestanden/app.css">
    <link rel="stylesheet" type="text/css" href="../CSS-bestanden/reviews.css">
    <title>"Luukse"huisjehuren.nl</title>
</head>

<body>
    <div id="wrapper">
        <div class="figure">
            <a href="Homepage.php"><img class="logo" src="../Afbeeldingen/landallogo.png" alt="Logo Landal"></a>
        </div>
        <header>
            <h1> Reviewen </h1>
        </header>
        <div id="reserverenteksteen">
            <h2>Laat een review achter!</h2><br><br>
            <form action="reviewopslaan.php" method="post">
                <label for="titel">Titel:</label>
                <input type="text" name="titel" maxlength="15" id="titel" required><br>
                <span class="text-area">
                    <label for="inhoud">Inhoud:</label>
                    <textarea maxlength="130" name="inhoud" id="inhoud" required></textarea><br>
                </span>
                <label for="auteur">Uw naam:</label>
                <input type="text" name="auteur" id="auteur" required><br>
                <label for="sterren">Sterren:</label>
                <input type="number" name="sterren" id="sterren" min="1" max="5" required><br><br>
                <input type="submit" value="Opslaan">
            </form>
        </div>
</body>

</html>