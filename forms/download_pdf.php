<?php
// Check if the PDF filename is provided as a parameter
if (isset($_GET['pdf'])) {
    // Get the PDF filename from the URL parameter
    $pdfFileName = $_GET['pdf'];

    // Check if the PDF file exists
    $pdfFilePath = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . $pdfFileName;
    if (file_exists($pdfFilePath)) {
        // Set headers for PDF download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $pdfFileName . '"');
        header('Content-Length: ' . filesize($pdfFilePath));

        // Output the PDF file for download
        readfile($pdfFilePath);
        exit;
    } else {
        // PDF file not found
        echo "Error: PDF file not found.";
    }
} else {
    // PDF filename parameter not provided
    echo "Error: PDF filename not specified.";
}
?>
