<?php
require "../Database/user-class.php";

$message = "";
session_start();
$user = new User();
$result = $user->SelectPersoon($_SESSION['Persoon_id']);

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            // Data verzamelen
            $Naam = $_POST['Naam'];
            $Achternaam = $_POST['Achternaam'];
            $Adres = $_POST['Adres'];
            $Postcode = $_POST['Postcode'];
            $Woon = $_POST['Woon'];
            $Gezin = $_POST['Gezin'];
            $Email = $_POST['Email'];
            $Wachtwoord = $_POST['Wachtwoord'];

            // Update user information
            $user->UpdatePersoon($_SESSION['Persson_id'], $Wachtwoord);
            header("location:../Inlogpagina/inlogpagina.php");
            exit;
        } catch (Exception $e) {
            $message = "Error: " . $e->getMessage();
        }
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
    <link rel="stylesheet" href="../CSS/Profiel.css"> 
    <title>Profiel</title>
</head>
<body>
    <div class="container">
        <h1>Profiel</h1>
        <?php if ($message) echo "<p>$message</p>"; ?>
        <form method="POST">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="Naam" value="<?php echo htmlspecialchars($result['Naam']); ?>" required>

            <label for="achternaam">Achternaam:</label>
            <input type="text" id="achternaam" name="Achternaam" value="<?php echo htmlspecialchars($result['Achternaam']); ?>" required>

            <label for="adres">Adres:</label>
            <input type="text" id="adres" name="Adres" value="<?php echo htmlspecialchars($result['Adres']); ?>" required>

            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="Postcode" value="<?php echo htmlspecialchars($result['Postcode']); ?>" required>

            <label for="woon">Woonsituatie:</label>
            <input type="text" id="woon" name="Woon" value="<?php echo htmlspecialchars($result['Woonsituatie']); ?>" required>

            <label for="gezin">Gezin:</label>
            <input type="number" id="gezin" name="Gezin" value="<?php echo htmlspecialchars($result['Kinderen']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" value="<?php echo htmlspecialchars($_SESSION['Email']); ?>" required>

            <label for="wachtwoord">Wachtwoord:</label>
            <input type="password" id="wachtwoord" name="Wachtwoord" required>

            <input type="submit" value="Updaten">
        </form>
    </div>
</body>
</html>