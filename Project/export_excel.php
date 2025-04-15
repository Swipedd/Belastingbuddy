<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create a function to export data
function exportExcel() {
    $db = new DB();
    // Fetch all toeslag records
    $query = "SELECT * FROM toeslag";
    $results = $db->run($query)->fetchAll(PDO::FETCH_ASSOC);

    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set the column headers
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Naam');
    $sheet->setCellValue('C1', 'Toeslag');
    $sheet->setCellValue('D1', 'JaarInkomen');
    $sheet->setCellValue('E1', 'Kinderen');
    $sheet->setCellValue('F1', 'Huur');
    $sheet->setCellValue('G1', 'Bericht');

    // Output each row
    $row = 2;
    foreach ($results as $data) {
        $sheet->setCellValue('A' . $row, $data['ID']);
        $sheet->setCellValue('B' . $row, $data['Naam']);
        $sheet->setCellValue('C' . $row, $data['Toeslag']);
        $sheet->setCellValue('D' . $row, $data['JaarInkomen']);
        $sheet->setCellValue('E' . $row, $data['Kinderen']);
        $sheet->setCellValue('F' . $row, $data['Huur']);
        $sheet->setCellValue('G' . $row, $data['Bericht']);
        $row++;
    }

    // Write the file to the output
    $writer = new Xlsx($spreadsheet);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="toeslagen_export.xlsx"');
    $writer->save('php://output');
    exit();
}

// Call the function to export the data
exportExcel();
?>
