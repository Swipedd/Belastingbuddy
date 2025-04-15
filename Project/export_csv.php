<?php
// Include database connection
require_once 'db.php';

// Create a function to export data
function exportCSV() {
    $db = new DB();
    // Fetch all toeslag records
    $query = "SELECT * FROM toeslag";
    $results = $db->run($query)->fetchAll(PDO::FETCH_ASSOC);

    // Set headers to tell the browser it's a CSV file
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=toeslagen_export.csv');

    // Open the output stream
    $output = fopen('php://output', 'w');

    // Output column headers
    fputcsv($output, array('ID', 'Naam', 'Toeslag', 'JaarInkomen', 'Kinderen', 'Huur', 'Bericht'));

    // Output each row
    foreach ($results as $row) {
        fputcsv($output, $row);
    }

    // Close the output stream
    fclose($output);
    exit();
}

// Call the function to export the data
exportCSV();
?>
