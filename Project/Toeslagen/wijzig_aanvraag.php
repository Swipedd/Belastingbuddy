<?php
session_start();

if (!isset($_GET['index']) || !isset($_SESSION['aanvragen'][$_GET['index']])) {
    die("Geen geldige aanvraag opgegeven.");
}

$index = $_GET['index'];
$aanvraag = &$_SESSION['aanvragen'][$index];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aanvraag['naam'] = $_POST['wijzig_naam'];
    $aanvraag['status'] = $_POST['wijzig_status'];
    $aanvraag['datum'] = $_POST['wijzig_datum'];
    $aanvraag['toeslagtype'] = $_POST['wijzig_toeslagtype'];

    header("Location: toeslagen.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig aanvraag</title>
    <link rel="stylesheet" href="wijzig.css">
</head>
<body>
    <div class="container">
        <h1>Wijzig aanvraag</h1>
        <form method="POST">
            <label>Naam:</label>
            <input type="text" name="wijzig_naam" value="<?php echo htmlspecialchars($aanvraag['naam']); ?>" required>
            
            <label>Status:</label>
            <select name="wijzig_status" required>
                <option value="Lopend" <?php echo ($aanvraag['status'] == 'Lopend') ? 'selected' : ''; ?>>Lopend</option>
                <option value="Goedgekeurd" <?php echo ($aanvraag['status'] == 'Goedgekeurd') ? 'selected' : ''; ?>>Goedgekeurd</option>
                <option value="Afgewezen" <?php echo ($aanvraag['status'] == 'Afgewezen') ? 'selected' : ''; ?>>Afgewezen</option>
            </select>

            <label>Datum ingediend:</label>
            <input type="date" name="wijzig_datum" value="<?php echo htmlspecialchars($aanvraag['datum']); ?>" required>
            
            <label>Typetoeslag:</label>
            <select name="wijzig_toeslagtype" required>
                <option value="Huurtoeslag" <?php echo ($aanvraag['toeslagtype'] == 'Huurtoeslag') ? 'selected' : ''; ?>>Huurtoeslag</option>
                <option value="Kindertoeslag" <?php echo ($aanvraag['toeslagtype'] == 'Kindertoeslag') ? 'selected' : ''; ?>>Kindertoeslag</option>
                <option value="Zorgtoeslag" <?php echo ($aanvraag['toeslagtype'] == 'Zorgtoeslag') ? 'selected' : ''; ?>>Zorgtoeslag</option>
            </select>

            <br><br>
            <button type="submit">Opslaan</button>
            <a href="toeslag.php">Annuleren</a>
        </form>
    </div>
</body>
</html>
