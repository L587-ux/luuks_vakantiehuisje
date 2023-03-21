<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS-bestanden/app.css">
    <title>Reservering verwijderen</title>
</head>

<body>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'root', 'usbw');

        $sql = "SELECT * FROM Klant WHERE Klantnummer = ? ";
        $stmt = $db->prepare($sql);
        $stmt->execute([$_POST['verstopt']]);

        $result = $stmt->fetchAll();

        foreach ($result as $row) {
            $Klantnummer = $row["Klantnummer"];
            $Geslacht = $row["Geslacht"];
            $Voornaam = $row["Voornaam"];
            $Tussenvoegsel = $row["Tussenvoegsel"];
            $Achternaam = $row["Achternaam"];
            $Adres = $row["Adres"];
            $Postcode = $row["Postcode"];
            $Woonplaats = $row["Woonplaats"];
            $Telefoonnummer = $row["Telefoonnummer"];
            $Email = $row["Email"];
        }

        

        

        echo "<form action='reserveringwijzigendefinitief.php' method='post'>
            <label for='$Klantnummer'>Klantnummer</label><input readonly name='Klantnummer' type='hidden' value='Klantnummer' tabindex='10'><br>
            <label for='$Geslacht'>Geslacht</label><input name='Geslacht' type='text' value='$Geslacht' tabindex='1'><br>
            <label for='$Voornaam'>Voornaam</label><input name='Voornaam' type='text' value='$Voornaam' tabindex='2'><br>
            <label for='$Tussenvoegsel'>Tussenvoegsel</label><input name='Tussenvoegsel' type='text' value='$Tussenvoegsel' tabindex='3'><br>
            <label for='$Achternaam'>Achternaam</label><input name='Achternaam' type='text' value='$Achternaam' tabindex='4'><br>
            <label for='$Adres'>Adresn</label><input name='Adres' type='text' value='$Adres' tabindex='5'><br>
            <label for='$Postcode'>Postcode</label><input name='Postcode' type='text' value='$Postcode' tabindex='6'><br>
            <label for='$Woonplaats'>Woonplaats</label><input name='Woonplaats' type='text' value='$Woonplaats' tabindex='7'><br>
            <label for='$Telefoonnummer'>Telefoonnummer</label><input name='Telefoonnummer' type='number' value='$Telefoonnummer' tabindex='8'><br>
            <label for='$Email'>Email</label><input name='Email' type='email' value='$Email' tabindex='9'><br>
            <input value='submit' name='submit' type='submit'>
        </form>";
        $db = NULL;
    }

    ?>
</body>

</html>