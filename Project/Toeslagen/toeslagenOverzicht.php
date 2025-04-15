<?php
require "../Database/aanvraag-class.php";

$aanvraag = new aanvraag();
$aanvragen = $aanvraag->SelectAlleAanvraag();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellingen Overzicht</title>
   <link rel="stylesheet" href="ToelsagOverzicht.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <h1>Overzicht van Aanvragen</h1>
 
    <table>
        <tr>
            <th>AanvraagID</th>
            <th>ToeslagID</th>
            <th>PersoonID</th>
        </tr>
    <?php
    if (empty($aanvragen)) {
        echo "<tr><td colspan='3'>Geen aanvragen gevonden.</td></tr>";
    } else {
        foreach ($aanvragen as $aanvraag) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($aanvraag['AanvraagID']) . "</td>";
            echo "<td>" . htmlspecialchars($aanvraag['ToeslagID']) . "</td>";
            echo "<td>" . htmlspecialchars($aanvraag['PersoonID']) . "</td>";
            echo "</tr>";
        }
    }
    ?>
    </table>
</body>
</html>