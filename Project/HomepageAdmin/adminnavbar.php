<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../Homepage&navbarNEW/index.php');
    exit;
}
?>

<!-- navbar.php -->
<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

      <!-- =============== CSS =============== -->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>BelastingBuddy</title>
   </head>
<header class="header" id="header">
   <nav class="nav container">
      <a href="#" class="nav__logo">
         <img src="../Homepage&navbarNEW/assets/img/logo.jpeg" alt="Bedrijfslogo" width="50" height="50">
      </a>

      <div class="nav__menu" id="nav-menu">
         <ul class="nav__list">
            <li><a href="index.php" class="nav__link">Dashboard</a></li>
            <li><a href="users.php" class="nav__link">Gebruikers</a></li>
            <li><a href="requests.php" class="nav__link">Aanvragen</a></li>
            <li><a href="settings.php" class="nav__link">Instellingen</a></li>
            <li><a href="../Inlogpagina/logout.php" class="nav__link">Uitloggen</a></li>
         </ul>
      </div>
   </nav>
</header>
