<?php
require_once "../Database/toeslag-class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toeslag = new Toeslag();   
    $Naam = $_POST["Naam"];
    $Toeslag = $_POST["Toeslag"];
    $Inkomen = isset($_POST["Inkomen"]) ? $_POST["Inkomen"] : 0;
    $Kinderen = isset($_POST["Kinderen"]) ? $_POST["Kinderen"] : 0;
    $Huur = isset($_POST["Huur"]) ? $_POST["Huur"] : 0;
    $Bericht = $_POST["Bericht"];
    
    
    $resultaat = "";
    
    if ($Toeslag == "Huur") {
        if ($Huur > 0 && $Inkomen < 1000) {
            $toeslag->AanvraagToeslag($Naam, $Toeslag, $Inkomen, $Kinderen, $Huur, $Bericht);
            $resultaat = "Je komt in aanmerking voor 500 euro huurtoeslag.";
        } else {
            $resultaat = "Je voldoet niet aan de voorwaarden voor huurtoeslag.";
        }
    } elseif ($Toeslag == "Zorg") {
        if ($Inkomen < 12000) {
            $toeslag->AanvraagToeslag($Naam, $Toeslag,$Inkomen, $Kinderen, $Huur, $Bericht);
            $resultaat = "Je komt in aanmerking voor zorgtoeslag.";
        } else {
            $resultaat = "Je voldoet niet aan de voorwaarden voor zorgtoeslag.";
        }
    } elseif ($Toeslag == "Kinder") {
        if ($Kinderen >= 4 && $Inkomen < 30000) {
            $toeslag->AanvraagToeslag($Naam, $Toeslag, $Inkomen, $Kinderen, $Huur, $Bericht);
            $resultaat = "Je komt in aanmerking voor kinderopvangtoeslag.";
        } else {
            $resultaat = "Je voldoet niet aan de voorwaarden voor kinderopvangtoeslag.";
        }
    } else {
        $resultaat = "Ongeldige keuze.";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Toeslag.css">
    <!-- In toeslag.php -->
<link rel="stylesheet" href="../Homepage&navbarNEW/assets/css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <title>Toeslagen</title>
    <script>
        function updateFields() {
            var toeslag = document.getElementById("Toeslag").value;
            document.getElementById("huurveld").style.display = toeslag === "Huur" ? "block" : "none";
            document.getElementById("inkomenveld").style.display = (toeslag === "Zorg" || toeslag === "Kinder") ? "block" : "none";
            document.getElementById("kinderenveld").style.display = toeslag === "Kinder" ? "block" : "none";
        }
    </script>
</head>
<body>
    
    <?php include '../Homepage&navbarNEW/navbar.php'; ?>
    
    <form method="post" action="" oninput="updateFields()">
        <label for="Naam">Naam</label>
        <input type="text" name="Naam" id="Naam" required>

        <label for="Toeslag">Kies welke toeslag je wilt aanvragen</label>
        <select name="Toeslag" id="Toeslag" onchange="updateFields()">
            <option value="">-- Selecteer --</option>
            <option value="Zorg">Zorgtoeslag</option>
            <option value="Huur">Huurtoeslag</option>
            <option value="Kinder">Kinderopvangtoeslag</option>
        </select>
        
        <div id="huurveld" style="display: none;">
            <label for="Huur">Maandelijkse Huur &euro;</label>
            <input type="number" name="Huur" id="Huur">
        </div>

        <div id="inkomenveld" style="display: none;">
            <label for="Inkomen">Jaarlijks Inkomen &euro;</label>
            <input type="number" name="Inkomen" id="Inkomen">
        </div>

        <div id="kinderenveld" style="display: none;">
            <label for="Kinderen">Aantal Kinderen</label>
            <input type="number" name="Kinderen" id="Kinderen">
        </div>

        <label for="Bericht">Waarom wilt u een toeslag aanvragen?</label>
        <textarea name="Bericht" placeholder="Typ hier je bericht" required></textarea>

        <input type="submit" value="Aanvragen" class="button">
    </form>

    <?php if (isset($resultaat)) { echo "<p>$resultaat</p>"; } ?>
</body>
</html>
