<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Reservering verwijderen</title>
    <link rel="stylesheet" type="text/css" href="../CSS-bestanden/app.css">
    <link rel="stylesheet" href="../CSS-bestanden/admin.css">

</head>

<body>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'test');
    $sql = "SELECT * FROM Klant  INNER JOIN Reservering ON Reserveringsnummer = Klantnummer  WHERE Klantnummer = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_POST['verstopt']]);
    $resultaat = $stmt->fetchAll();
    foreach ($resultaat as $row) {
        echo '<p>';
        $code = $row['Klantnummer'];
        echo 'Klantnummer: ' . $row['Klantnummer'] . '<br>';
        echo 'Geslacht: ' . $row['Geslacht'] . '<br>';
        echo 'Voornaam: ' . $row['Voornaam'] . '<br>';
        echo 'Tussenvoegsel: ' . $row['Tussenvoegsel'] . '<br>';
        echo 'Achternaam: ' . $row['Achternaam'] . '<br>';
        echo 'Adres: ' . $row['Adres'] . '<br>';
        echo 'Postcode: ' . $row['Postcode'] . '<br>';
        echo 'Woonplaats: ' . $row['Woonplaats'] . '<br>';
        echo 'Telefoonnummer: ' . $row['Telefoonnummer'] . '<br>';
        echo 'Email: ' . $row['Email'] . '<br>';
        echo 'Gewenste aankomstdatum: ' . $row['Gewenste_aankomstdatum'] . '<br>';
        echo 'Aantal nachten: ' . $row['Aantal_nachten'] . '<br>';
        echo 'Aantal personen: ' . $row['Aantal_personen'] . '<br>';
        echo '</p>';
    }
    echo "<div class='centreren'>";
    echo "<p>
            <form action='reserveringverwijderendefinitief.php' method='post'> 
            Weet u zeker dat u deze reservering wilt verwijderen? 
            <input type='hidden' name='verstopt' value=$code>
            <input type='submit' name='verwijderja' value='Ja'>
            </form></p>";
    echo "<p><form action='admin22032023.php' method='post'>
            <input type='submit' name='verwijdernee' value='Terug'>
            </form></p>";
    echo "</div>";
    $db = NULL;
    ?>
</body>

</html>