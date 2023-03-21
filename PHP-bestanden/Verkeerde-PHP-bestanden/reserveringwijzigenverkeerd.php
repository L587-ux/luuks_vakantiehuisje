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
        try{
        $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'root', 'usbw');
        $sql = "SELECT * FROM Klant
        ORDER BY Klantnummer DESC
        LIMIT 0,1 ";

        $resultaat = $db->query($sql);
        // echo "<table>";
        // foreach($resultaat as $row) {
        //     echo '<tr>';
        //     echo "<td>".$kiezen = $row['Geslacht'].'</td>'; 
        //     echo "<td>".$voornaam = $row['Voornaam'].'</td>';
        //     echo "<td>".$tussenvoegsel = $row['Tussenvoegsel'].'</td>';
        //     echo "<td>".$achternaam = $row['Achternaam'].'</td>';
        //     echo "<td>".$adres = $row['Adres'].'</td>';
        //     echo "<td>".$postcode = $row['Postcode'].'</td>';
        //     echo "<td>".$woonplaats = $row['Woonplaats'].'</td>';
        //     echo "<td>".$telefoonnummer = $row['Telefoonnummer'].'</td>';
        //     echo "<td>".$email = $row['Email'].'</td>';
        //     echo '</tr>';
        // }
        // echo "</table>";
       
        // $stmt = $db->prepare($sql);
        // $stmt->execute([$_POST['verstopt']]);
        // $resultaat = $stmt->fetchAll();
       
        // $sql = "SELECT * FROM Reservering
        // ORDER BY Reserveringsnummer DESC
        // LIMIT 0,1";
        // $resultaat = $db->query($sql); 
        // foreach($resultaat as $row) {
        //    // echo '<p class="reservering-wijzigen">';
        //     $aankomstdatum = $row['Gewenste_aankomstdatum'].'<br>';
        //     $aantalnachten = $row['Aantal_nachten'].'<br>';
        //     $aantalpersonen = $row['Aantal_personen'].'<br>';
        //    // echo '</p>';
        }
        $db = NULL;
        // echo "<form action='reserveringwijzigendefinitief.php' method='post'>
        //     <p>Geslacht: <br>
        //     Man
        //     <input name='kiezen' type='radio' size='30' value=man readonly> 
        //     </p>
        //     <p>Vrouw
        //     <input name='kiezen' type='radio' size='30' value=vrouw readonly>
        //     </P>
        //     <p>Voornaam: <br>
        //     <input name='voornaam' type='text' size='30' value=$voornaam>
        //     </p>
        //     <p>Tussenvoegsel: <br>
        //     <input name='tussenvoegsel' type='text' size='30' value=$tussenvoegsel>
        //     </p>
        //     <p>Achternaam: <br>
        //     <input name='achternaam' type='text' size='30' value=$achternaam>
        //     </p>
        //     <p>Adres: <br>
        //     <input name='adres' type='text' size='30' value=$adres>
        //     </p>
        //     <p>Postcode <br>
        //     <input nam:e='postcode' type='text' size='30' value=$postcode>
        //     </p>
        //     <p>Woonplaats: <br>
        //     <input name='woonplaats' type='text' size='30' value=$woonplaats>
        //     </p>
        //     <p>Telefoonnummer: <br>
        //     <input name='telefoonnummer' type='number' size='30' value=$telefoonnummer>
        //     </p>
        //     <p>Email: <br>
        //     <input name='email' type='email' size='30' value=$email>
        //     </p>
        //     </form>";
        //     //????
        // echo "<form action='reserveringwijzigendefinitief.php' method-'post'>
        //     <p>Gewenste aankomstdatum: <br>
        //     <input name='aankomstdatum' type='date' size='30' value=$aankomstdatum 
        //     </p>
        //     <p>Aantal nachten: <br>
        //     <input name='aantalnachten' type='number' size='30' value=$aantalnachten 
        //     </p>
        //     <p>Aantal personen: <br>
        //     <input name='aantalpersonen' type='number' size='30' value=$aantalpersonen 
        //     </p>
        //     <p><input type='submit' name='submit' value='Verstuur' title='Verstuur dit formulier'>
        //     </p>
        //     </form>";
        } catch (PDOException $e) 
        {echo $e; echo "<hr>"; echo $sql;}
        ?>
    </div>
    </body> 
</html>