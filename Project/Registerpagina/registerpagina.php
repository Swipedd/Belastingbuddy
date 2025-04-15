<?php
require "../Database/user-class.php";

$message = "";

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = new User();
        $user->registerPersoon(
            $_POST['Naam'], 
            $_POST['Achternaam'], 
            $_POST['Adres'], 
            $_POST['Postcode'], 
            $_POST['Woonsituatie'], 
            $_POST['Kinderen'],
            $_POST['Email'],
            $_POST['Wachtwoord']
        );

        header("Location: ../Inlogpagina/inlogpagina.php");
        exit;
    }
} catch (Exception $e) {
    $message = "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <?php if ($message) echo "<p>$message</p>"; ?>
        <h1>Register</h1>
        <form action="registerpagina.php" method="POST">
            <label for="naam">Naam:</label><br>
            <input type="text" id="naam" name="Naam" required><br><br>

            <label for="achternaam">Achternaam:</label><br>
            <input type="text" id="achternaam" name="Achternaam" required><br><br>

            <label for="adres">Adres:</label><br>
            <input type="text" id="adres" name="Adres" required><br><br>

            <label for="postcode">Postcode:</label><br>
            <input type="text" id="postcode" name="Postcode" required><br><br>

            <label for="Woonsituatie">Woonsituatie:</label><br>
            <input type="text" id="Woonsituatie" name="Woonsituatie" required><br><br>

            <label for="Kinderen">Gezin:</label><br>
            <input type="number" id="Kinderen" name="Kinderen" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="Email" required><br><br>

            <label for="wachtwoord">Wachtwoord:</label><br>
            <input type="password" id="wachtwoord" name="Wachtwoord" required><br><br>

            <input type="submit" value="Account Aanmaken">
        </form>
        <br>
        <div class="links">
            <a href="../Registerpagina/registerpagina.php">Registreren</a>
        </div>
    </div>
</body>
</html>

