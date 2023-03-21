<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Reservering wijzigen</title>
    <link rel="stylesheet" type="text/css" href="../CSS-bestanden/app.css">
    <link rel="stylesheet" type="text/css" href="../CSS-bestanden/admin.css">
</head>

<body>
    <?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'root', 'usbw');

        $sql = "UPDATE Klant
                SET Geslacht = ?, 
                Voornaam = ?,
                Tussenvoegsel = ?,
                Achternaam = ?,
                Adres = ?,
                Postcode = ?,
                Woonplaats = ?,
                Telefoonnummer = ?,
                Email = ?
                WHERE Klantnummer = ?";
        $stmt = $db->prepare($sql);
        $resultaat = $stmt->execute([
            $_POST['Geslacht'],
            $_POST['Voornaam'],
            $_POST['Tussenvoegsel'],
            $_POST['Achternaam'],
            $_POST['Adres'],
            $_POST['Postcode'],
            $_POST['Woonplaats'],
            $_POST['Telefoonnummer'],
            $_POST['Email'],
            $_POST['Klantnummer']
        ]);

        //
        $reservering = [
            $_POST['Gewenste_aankomstdatum'],
            $_POST['Aantal_personen'],
            $_POST['Aantal_nachten'],
            $_POST['Klantnummer'],
        ];

        $sql = "UPDATE Reservering
                SET Gewenste_aankomstdatum = ?, 
                Aantal_nachten = ?,
                Aantal_personen = ?
                WHERE Reserveringsnummer = ?";
        $stmt = $db->prepare($sql);
        $resultaat = $stmt->execute($reservering);


        //

        $sql = "SELECT * FROM Klant INNER JOIN Reservering ON Reserveringsnummer = Klantnummer WHERE Klantnummer = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$_POST['Klantnummer']]);
        $resultaat = $stmt->fetchAll();
        echo "<div class='center'>";
        foreach ($resultaat as $row) {
            echo '<p>';
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
            echo 'Aankomst: ' . $row['Gewenste_aankomstdatum'] . '<br>';
            echo 'Aantal nachten: ' . $row['Aantal_nachten'] . '<br>';
            echo 'Aantal personen: ' . $row['Aantal_personen'] . '<br>';
            echo '</p>';
        }
        echo "<p>is nu gewijzigd!</p>";
        echo "<p><form action='reserveringbekijken.php' method='post'>
            <input type='submit' name='submit' value='Terug'>
            </form></p>";
        echo "</div>";
        $db = NULL;
    } catch (PDOException $e) {
        echo $e . "<br>" . $sql;
    }
    ?>
</body>

</html>