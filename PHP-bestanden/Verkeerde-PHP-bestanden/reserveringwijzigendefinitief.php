<!DOCTYPE html> 
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Reservering wijzigen</title> 
        <link rel="stylesheet" href="../CSS-bestanden/app.css">
    </head>
    <body>
    <div id="wrapper">
            <div class="figure">
            <a href="Homepage.php"><img class="logo" src="../Afbeeldingen/landallogo.png" alt="Logo Landal"></a>
            </div>
            <header>
                <h1 class='speciaal-lettertype'> Reservering wijzigen </h1>
            </header>
        <?php
        $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'test'); 
        $sql = "UPDATE Klant
                SET 
                Geslacht = ?, 
                Voornaam = ?,
                Tussenvoegsel = ?,
                Achternaam = ?,
                Adres = ?,
                Postcode = ?,
                Woonplaats = ?,
                Telefoonnummer = ?,
                Email = ?
                WHERE Klantnummer = ?
                ";
        $stmt = $db->prepare($sql);
        $resultaat = $stmt->execute([$_POST['Geslacht'], 
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

        // $sql = "UPDATE Reservering
        //         SET Gewenste_aankomstdatum = ?, 
        //         Aantal_nachten = ?,
        //         Aaantal_personen = ?
        //         ";
        // $stmt = $db->prepare($sql);
        // $resultaat = $stmt->execute([$_POST['aankomstdatum'], 
        //                             $_POST['aantalnachten'], 
        //                             $_POST['aantalpersonen']]);
        // //Update weergeven
        $sql = "SELECT * FROM Klant 
                WHERE Klantnummer = ?";
        $stmt = $db->prepare($sql); 
        $stmt->execute([$_POST['Klantnummer']]); 
        $resultaat = $stmt->fetchAll(); 
        foreach($resultaat as $row) {
            echo '<p>';
            echo 'Geslacht: '.$row['Geslacht'].'<br>'; 
            echo 'Voornaam: '.$row['Voornaam'].'<br>';
            echo 'Tussenvoegsel: '.$row['Tussenvoegsel'].'<br>';
            echo 'Achternaam: '.$row['Achternaam'].'<br>';
            echo 'Adres: '.$row['Adres'].'<br>';
            echo 'Postcode: '.$row['Postcode'].'<br>';
            echo 'Woonplaats: '.$row['Woonplaats'].'<br>';
            echo 'Telefoonnummer: '.$row['Telefoonnummer'].'<br>';
            echo 'Email: '.$row['Email'].'<br>';
            echo '</p>';
        }
        // $sql = "SELECT * FROM Reservering 
        // ORDER BY Reserveringsnummer DESC
        // LIMIT 0,1 ";
        // $stmt = $db->prepare($sql); 
        // $stmt->execute([$_POST['Reserveringsnummer']]); 
        // $resultaat = $stmt->fetchAll(); 
        // foreach($resultaat as $row) {
        //     echo '<p class="reservering-wijzigen">';
        //     echo 'Gewenste aankomstdatum: '.$row['Gewenste_aankomstdatum'].'<br>';
        //     echo 'Aantal nachten: '.$row['Aantal_nachten'].'<br>';
        //     echo 'Aantal personen: '.$row['Aantal_personen'].'<br>';
        //     echo '</p>';
        // }   
        //     echo "<p class='reservering-wijzigen'>Uw reservering is gewijzigd, u krijgt binnen 5 werkdagen een definitieve bevestiging. <br/> 
        //     <a href='Homepage.php' class='reservering-wijzigen'><div id='groen-blok' <p> <br/> &nbsp; Terug naar de homepage </p></div></a></p>";
        $db = NULL;
        }
        ?>
    </div>
    </body> 
</html>