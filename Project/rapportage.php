<?php
session_start();

// Controleer of er aanvragen zijn opgeslagen in de sessie
if (!isset($_SESSION['aanvragen'])) {
    $_SESSION['aanvragen'] = [];
}

$totaal = count($_SESSION['aanvragen']);
$goedgekeurd = 0;
$afgewezen = 0;

foreach ($_SESSION['aanvragen'] as $aanvraag) {
    if ($aanvraag['status'] === 'Goedgekeurd') {
        $goedgekeurd++;
    } elseif ($aanvraag['status'] === 'Afgewezen') {
        $afgewezen++;
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapportage Toeslagen</title>
    <link rel="stylesheet" href="rapportage.css">
</head>
<body>
    <div class="container">
        <h1>Rapportage Toeslagen</h1>
        <p><strong>Totaal aantal aanvragen:</strong> <?php echo $totaal; ?></p>
        <p><strong>Aantal goedgekeurde aanvragen:</strong> <?php echo $goedgekeurd; ?></p>
        <p><strong>Aantal afgewezen aanvragen:</strong> <?php echo $afgewezen; ?></p>
        <a href="../project/Toeslagen/toeslagenOverzicht.php">Terug naar overzicht</a>
    </div>
</body>
</html>
