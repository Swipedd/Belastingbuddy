<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Belasting Buddy</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../Homepage&navbarNEW/assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
</head>
<body>
<?php include '../Homepage&navbarNEW/navbar.php'; ?>

    <!-- Loader -->
    <div id="loader">
        <div class="spinner"></div>
    </div>


    <main>
        <section class="contact">
            <h2>Neem contact met ons op</h2>
            <form action="contact_verwerk.php" method="POST">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="bericht">Bericht:</label>
                <textarea id="bericht" name="bericht" required></textarea>

                <button type="submit" class="button2">Verzenden</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Belasting Buddy. Alle rechten voorbehouden.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
