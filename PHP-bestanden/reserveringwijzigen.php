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
    $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'root', 'usbw');

    $sql = "SELECT * FROM Klant INNER JOIN reservering ON reserveringsnummer = klantnummer WHERE Klantnummer = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_POST['verstopt']]);
    $resultaat = $stmt->fetchAll();
    foreach ($resultaat as $row) {
        $Klantnummer = $row['Klantnummer'];
        $Geslacht = $row['Geslacht'];
        $Voornaam = $row['Voornaam'];
        $Tussenvoegsel = $row['Tussenvoegsel'];
        $Achternaam = $row['Achternaam'];
        $Adres = $row['Adres'];
        $Postcode = $row['Postcode'];
        $Woonplaats = $row['Woonplaats'];
        $Telefoonnummer = $row['Telefoonnummer'];
        $Email = $row['Email'];
        $Gewenste_aankomstdatum = $row['Gewenste_aankomstdatum'];
        $Aantal_nachten = $row['Aantal_nachten'];
        $Aantal_personen = $row['Aantal_personen'];
    }


    $db = NULL;
    echo "<form action='reserveringwijzigendefinitief.php' method='post'>
            <input name='Klantnummer' type='hidden' size='30' value='$Klantnummer' tabindex='10'>
            </p>
            <p>Geslacht: <br>
            <input name='Geslacht' type='text' size='30' value='$Geslacht' tabindex='1'>
            </p>
            <p>Voornaam: <br>
            <input name='Voornaam' type='text' size='30' value='$Voornaam'tabindex='2'>
            </p>
            <p>Tussenvoegsel: <br>
            <input name='Tussenvoegsel' type='text' size='30' value='$Tussenvoegsel' tabindex='3'>
            </p>
            <p>Achternaam: <br>
            <input name='Achternaam' type='text' size='30' value='$Achternaam' tabindex='4'>
            </p>
            <p>Adres: <br>
            <input name='Adres' type='text' size='30' value='$Adres' tabindex='5'>
            </p>
            <p>Postcode: <br>
            <input name='Postcode' type='text' size='30' value='$Postcode' tabindex='6'>
            </p>
            <p>Woonplaats: <br>
            <input name='Woonplaats' type='text' size='30' value='$Woonplaats' tabindex='7'>
            </p>
            <p>Telefoonnummer: <br>
            <input name='Telefoonnummer' type='text' size='30' value='$Telefoonnummer' tabindex='8'>
            </p>
            <p>Email: <br>
            <input name='Email' type='text' size='30' value='$Email' tabindex='9'>
            </p>
            <p>Aankomstdatum: <br>
            <input name='Gewenste_aankomstdatum' type='date' size='30' value='$Gewenste_aankomstdatum' tabindex='10'>
            </p>
            <p>Aantal nachten: <br>
            <input name='Aantal_nachten' type='text' size='30' value='$Aantal_nachten' tabindex='11'>
            </p>
            <p>Aantal personen: <br>
            <input name='Aantal_personen' type='number' size='30' value='$Aantal_personen' tabindex='12'>
            </p>
            <p><input type='submit' name='submit' value='Verstuur' title='Verstuur dit formulier' tabindex='13'>
            </p>
            </form>";
    ?>
</body>

</html>