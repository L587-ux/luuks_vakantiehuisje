<?php
session_start();
 
// Connectie maken met de database
$database = new PDO('sqlite:Vakantiehuisje.sqlite');
 
// Gegevens van het inlogformulier ophalen
$email = $_POST['email'];
$password = $_POST['password'];
 
// Query om te controleren of het emailadres en wachtwoord kloppen
$query = $database->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
$query->bindParam(":email", $email);
$query->bindParam(":password", $password);
$query->execute();
 
// Als de combinatie van email en wachtwoord klopt, sla de gebruikersnaam op in de sessie
if ($query->rowCount() == 1) {
    $_SESSION['username'] = $email;
    header("Location: admin.php");
} else {
    echo "Invalid email or password";
}
?>
