<?php
session_start(); // start de sessie voor het opslaan van de gebruikersgegevens

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // controleer of de pagina is opgeroepen via een POST request
  $email = $_POST['email'];
  $password = $_POST['password'];

  // maak verbinding met de database
  $db = new PDO('mysql:host=localhost;dbname=luuks_vakantiehuis', 'root', 'usbw');

  // selecteer de gebruiker met het opgegeven e-mailadres en wachtwoord uit de database
  $stmt = $db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
  $stmt->execute(array(':email' => $email, ':password' => $password));
  $user = $stmt->fetch();

  if ($user) { // als er een gebruiker met het opgegeven e-mailadres en wachtwoord is gevonden
    $_SESSION['user'] = $user; // sla de gebruikersgegevens op in de sessie
    header('Location: admin.php'); // stuur de gebruiker door naar de admin pagina
    exit();
  } else {
    $error = 'Invalid email or password'; // als er geen gebruiker is gevonden, toon een foutmelding
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="../CSS-bestanden/loginstyle.css">
</head>

<body>
  <div class="login-container">
    <h1>Login</h1>
    <form action="login.php" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Wachtwoord:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Inloggen">
    </form>
  </div>
  <script src="../js/script.js"></script>
  <script src="../js/jquery.min.js"></script>
</body>

</html>