<?php
session_start();

// TIJDELIJK VOOR TESTEN
$_SESSION['username'] = 'admin';
$_SESSION['role'] = 'admin';

// Alleen toegang voor admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../Homepage&navbarNEW/index.php');
    exit;
}

include 'adminnavbar.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Belasting Buddy</title>

    <!--=============== STIJLEN ===============-->
    <link rel="stylesheet" href="../Homepage&navbarNEW/assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
</head>
<body>

<main class="main section container">
    <h1 class="section__title">Admin Dashboard</h1>
    <p class="section__subtitle">Beheer en overzicht</p>

    <div class="grid">
        <div class="toeslagen__card">
            <h3>Gebruikers beheren</h3>
            <p>Bekijk en bewerk gebruikersgegevens.</p>
            <a href="admin-users.php" class="button">Ga naar beheer</a>
        </div>

        <div class="toeslagen__card">
            <h3>Toeslagverzoeken</h3>
            <p>Bekijk ingediende aanvragen voor toeslagen.</p>
            <a href="admin-requests.php" class="button">Bekijk aanvragen</a>
        </div>

        <div class="toeslagen__card">
            <h3>Instellingen</h3>
            <p>Pas sitegegevens of instellingen aan.</p>
            <a href="admin-settings.php" class="button">Ga naar instellingen</a>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="footer__container container grid">
        <div>
            <a href="#" class="nav__logo">
                <img src="../Homepage&navbarNEW/assets/img/logo.jpeg" alt="Logo" width="50" height="50">
            </a>
        </div>
    </div>
    <span class="footer__copy">&#169; 2025 Belasting Buddy</span>
</footer>

</body>
</html>
