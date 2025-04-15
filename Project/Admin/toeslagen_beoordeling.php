<?php
session_start();

require "../Database/toeslag-class.php";

// if (!isset($_SESSION['ID'])) {
//     header('Location:../Inlogpagina/inlogpagina.php');
//     exit();
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toeslag = new Toeslag();
    // $Naam = $_POST['Naam'];
    $data = $toeslag->SelectToeslag();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toeslagen</title>
</head>
<body>
    <table>
        <tr>
            <th>Account ID</th>
            <th>Naam</th>
            <th>Toeslag</th>
            <th>Inkomen</th>
            <th>Kinderen</th>
            <th>Huur</th>
            <th>Bericht</th>
        </tr>
        <tr>
            <?php

            if (!empty($data)) {
            foreach ($data as $gegevens) {
                echo "<td>". $gegevens['ID'] . "</td>";
                echo "<td>". $gegevens['Naam'] . "</td>";
                echo "<td>". $gegevens['Toeslag'] . "</td>";
                echo "<td>". $gegevens['JaarInkomen'] . "</td>";
                echo "<td>". $gegevens['Kinderen'] . "</td>";
                echo "<td>". $gegevens['Huur'] . "</td>";
                echo "<td>". $gegevens['Bericht'] . "</td>";
            }

            ?>
        </tr> <?php } ?>
    </table>  
</body>
</html>