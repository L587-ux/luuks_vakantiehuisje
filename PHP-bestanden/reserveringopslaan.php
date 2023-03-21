<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Een reservering toevoegen</title>
    <link rel="stylesheet" href="../CSS-bestanden/app.css">
</head>

<body>
    <div id="wrapper">
        <div class="figure">
            <a href="Homepage.php"><img class="logo" src="../Afbeeldingen/landallogo.png" alt="Logo Landal"></a>
        </div>
        <header>
            <h1 class='speciaal-lettertype'> Reserveringsbevestiging </h1>
        </header>
        <?php
        try {
            $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'test');
            $sql = "INSERT INTO Klant (Klantnummer, Geslacht, Voornaam, Tussenvoegsel, Achternaam, Adres, Postcode, Woonplaats, Telefoonnummer, Email) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $db->prepare($sql);
            $resultaat = $stmt->execute([
                $_POST['id'],
                $_POST['kiezen'],
                $_POST['voornaam'],
                $_POST['tussenvoegsel'],
                $_POST['achternaam'],
                $_POST['adres'],
                $_POST['postcode'],
                $_POST['woonplaats'],
                $_POST['telefoonnummer'],
                $_POST['email']
            ]);


            $sql = "INSERT INTO Reservering (Reserveringsnummer, Gewenste_aankomstdatum, Aantal_nachten, Aantal_personen) VALUES (?,?,?,?)";
            $stmt = $db->prepare($sql);
            $resultaat = $stmt->execute([
                $_POST['id'],
                $_POST['gewenste_aankomstdatum'],
                $_POST['aantal_nachten'],
                $_POST['aantal_personen']
            ]);
            // Input weergeven
            $sql = "SELECT * FROM Klant
                ORDER BY Klantnummer DESC
                LIMIT 0,1 ";
            $resultaat = $db->query($sql);
            foreach ($resultaat as $row) {
                echo '<p class="reserverings-bevestiging">';
                echo 'Geslacht: ' . $row['Geslacht'] . '<br>';
                echo 'Voornaam: ' . $row['Voornaam'] . '<br>';
                echo 'Tussenvoegsel: ' . $row['Tussenvoegsel'] . '<br>';
                echo 'Achternaam: ' . $row['Achternaam'] . '<br>';
                echo 'Adres: ' . $row['Adres'] . '<br>';
                echo 'Postcode: ' . $row['Postcode'] . '<br>';
                echo 'Woonplaats: ' . $row['Woonplaats'] . '<br>';
                echo 'Telefoonnummer: ' . $row['Telefoonnummer'] . '<br>';
                echo 'Email: ' . $row['Email'] . '<br>';
                echo '</p>';
            }
            $sql = "SELECT * FROM Reservering
                ORDER BY Reserveringsnummer DESC
                LIMIT 0,1
                ";
            $resultaat = $db->query($sql);
            foreach ($resultaat as $row) {
                echo '<p class="reserverings-bevestiging">';
                echo 'Gewenste aankomstdatum: ' . $row['Gewenste_aankomstdatum'] . '<br>';
                echo 'Aantal nachten: ' . $row['Aantal_nachten'] . '<br>';
                echo 'Aantal personen: ' . $row['Aantal_personen'] . '<br>';
                echo '</p>';
            }
            echo "<p class='reserverings-bevestiging'>Uw reservering is toegevoegd, u krijgt binnen 5 werkdagen een definitieve bevestiging.<br>Als er een probleem is met deze gegevens kunt u een <a class='reservering-wijzigen' href='mailto:help@luuksvakantiehuisje.nl'>mailtje</a> naar ons sturen.<br>Wij zullen het dan zo snel mogelijk aanpassen.<br/> 
                <a href='Homepage.php' class='reserverings-bevestiging'><div id='groen-blok' <p> <br/> &nbsp; Terug naar de homepage </p></div></a></p>";
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