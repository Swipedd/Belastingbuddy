<?php
require "../Database/user-class.php";

session_start();

// Reeds ingelogd? Stuur direct door
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    if ($_SESSION['functie'] == "Admin") {
        header('location ../HomepageAdmin/admin.php');
    } 
}

// Als formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $user = new User();
        $data = $user->login($_POST['Email'], $_POST['Wachtwoord']);

        if ($data && password_verify($_POST['Wachtwoord'], $data['Wachtwoord'])) {
            // Login geslaagd, zet sessiegegevens
            $_SESSION['is_logged_in'] = true;
            $_SESSION['Email'] = $data['Email'];
            $_SESSION['Persoon_id'] = $data['PersoonID'];
            $_SESSION['functie'] = $data['Functie'];

            // Redirect op basis van rol
            if (strtolower($data['Functie']) === "admin") {
                header('Location: ../HomepageAdmin/admin.php');
            } else {
                header('Location: ../Homepage&navbarNEW/index.php');
            }
            exit;
        } else {
            echo "Verkeerde e-mail of wachtwoord.";
        }
    } catch (Exception $e) {
        echo "Fout bij inloggen: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="inlog.css">
</head>
<body>
    <div class="container">
        <h1>Inloggen</h1>
        <form method="POST">
            <input type="email" name="Email" placeholder="Email" required><br><br>
            <input type="password" name="Wachtwoord" placeholder="Wachtwoord" required><br><br>
            <input type="submit" name="submit" value="Login">
        </form>
        <br>
        <div class="links">
            <a href="../Registerpagina/registerpagina.php">Registreren</a>
        </div>
    </div>
</body>     
</html>
