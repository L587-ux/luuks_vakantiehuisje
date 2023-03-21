<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data bekijken</title>
    <link rel="stylesheet" href="../CSS-bestanden/admin.css">
    <!-- hier css -->
</head>

<body>
    <h2 class="bekijken">Reserveringen:</h2>

    <?php
    try {
        // Maak verbinding met de database
        $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'test');


        // Vraag data op
        $sql = "SELECT * FROM `klant` INNER JOIN reservering ON reservering.Reserveringsnummer = Klantnummer ORDER BY Gewenste_aankomstdatum ASC";
        $result = $db->query($sql);

        // Zet data om naar tabel
        echo "<table>";
        echo "<tr>";
        echo "<td>Geslacht</td>";
        echo "<td>Voornaam</td>";
        echo "<td>Tussenvoegsel</td>";
        echo "<td>Achternaam</td>";
        echo "<td>Adres</td>";
        echo "<td>Postcode</td>";
        echo "<td>Woonplaats</td>";
        echo "<td>Telefoonnummer</td>";
        echo "<td>Email</td>";
        echo "<td>Aankomstdatum</td>";
        echo "<td>Aantal nachten</td>";
        echo "<td>Aantal personen</td>";
        echo "<td>Wijzigen</td>";
        echo "<td>Verwijderen</td>";
        echo "</tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row["Geslacht"] . "</td>";
            echo "<td>" . $row["Voornaam"] . "</td>";
            echo "<td>" . $row["Tussenvoegsel"] . "</td>";
            echo "<td>" . $row["Achternaam"] . "</td>";
            echo "<td>" . $row["Adres"] . "</td>";
            echo "<td>" . $row["Postcode"] . "</td>";
            echo "<td>" . $row["Woonplaats"] . "</td>";
            echo "<td>" . $row["Telefoonnummer"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Gewenste_aankomstdatum"] . "</td>";
            echo "<td>" . $row["Aantal_nachten"] . "</td>";
            echo "<td>" . $row["Aantal_personen"] . "</td>";
            echo "<td><form action='reserveringwijzigen.php' method='post'>
                <input type='hidden' name='verstopt' value='" . $row["Klantnummer"] . "'>
                <input type='submit' name='wijzig' value='wijzig'>
            </form></td>";
            echo "<td><form action='reserveringverwijderen.php' method='post'>
                <input type='hidden' name='verstopt' value='" . $row["Klantnummer"] . "'>
                <input type='submit' name='verwijder' value='verwijder'>
            </form></td>";
            echo "</tr>";
        }
        echo "</table>";

        $db = NULL;
    } catch (PDOException $e) {
        echo $e;
        echo "<hr>";
        echo $sql;
    }
    ?>
</body>

</html>