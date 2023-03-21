<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="../CSS-bestanden/admin.css">
</head>

<body>
    <header>
        <h2>Reserveringen beheren</h2>
    </header>
    <div class="time-el">
        <hr>
        <?php echo "<p class='time'>" . date("d-m-Y, G:i") . "</p>"; ?>
        <hr>
    </div>
    <br>
    <p class="vraag">
        Wat wil je gaan doen?
    </p>
    <ul class="admin-ul">
        <li>
            <a href="reserveren.php">Reserveringen toevoegen</a>
        </li>
        <li>
            <a href="reserveringbekijken.php">Reserveringen bekijken/wijzigen/verwijderen</a>
        </li>
    </ul>
</body>

</html>