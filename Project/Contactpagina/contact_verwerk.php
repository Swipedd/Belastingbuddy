<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST['naam']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $bericht = htmlspecialchars($_POST['bericht']);
    $accountId = 1; // Verander dit naar de ingelogde gebruiker (bijv. via een sessie)

    if (!$email) {
        die("Ongeldig e-mailadres.");
    }

    try {
        $sql = "INSERT INTO contact (Naam, Email, Bericht, AccountId) VALUES (:naam, :email, :bericht, :accountId)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':naam' => $naam,
            ':email' => $email,
            ':bericht' => $bericht,
            ':accountId' => $accountId
        ]);
        
        // Redirect naar contact_bedankt.php
        header("Location: contact_bedankt.php");
        exit();
    } catch (PDOException $e) {
        echo "Fout bij verzenden: " . $e->getMessage();
    }
} else {
    echo "Ongeldige aanvraag.";
}
?>
