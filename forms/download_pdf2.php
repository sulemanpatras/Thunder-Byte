<?php
// Check if the PDF filename is provided as a parameter
if (isset($_GET['pdf2'])) {
    // Get the PDF filename from the URL parameter
    $pdfFileName2 = $_GET['pdf2'];

    // Check if the PDF file exists
    $pdfFileName2 = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . $pdfFileName2;
    if (file_exists($pdfFileName2)) {
        // Set headers for PDF download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $pdfFileName2 . '"');
        header('Content-Length: ' . filesize($pdfFileName2));

        // Output the PDF file for download
        readfile($pdfFileName2);
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
