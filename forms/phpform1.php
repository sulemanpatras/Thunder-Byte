<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php  include "../dashboard/auth/conn.php";
?>

  

<?php 

$sql = "SELECT services.category AS service_name, prices.price 
FROM services 
INNER JOIN prices ON services.id = prices.id";
$result = $conn->query($sql);
$data = [];
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$data[] = $row;
}
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
require_once('tcpdf/tcpdf.php');

// Check if TCPDF library is properly included and initialized
if (class_exists('TCPDF')) {
// Create TCPDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set document information
$pdf->SetTitle('Service Form Submission');
$pdf->SetHeaderData('', 0, 'Service Form Submission', '');

// Add a page
$pdf->AddPage();

// Process form data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$category = $conn->real_escape_string($_POST['category']);
$services = $conn->real_escape_string($_POST['services']); 
$customer_wants = $conn->real_escape_string($_POST['customer_wants']);
$heard_about = $conn->real_escape_string($_POST['heard_about']);

// Insert data into database
// $sql = "INSERT INTO `checkout` (`name`, `email`, `phone`, `category`, `services`, `customer_wants`, `heard_about`) 
//         VALUES ('$name', '$email', '$phone', '$category', '$services', '$customer_wants', '$heard_about')";

// if ($conn->query($sql) === TRUE) {
//     // header('Location: thank-you.php');
//     // exit();
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// Output PDF
$pdfContent = '<html><body>';
$pdfContent .= '<h1>Name: ' . $name . '</h1>';
$pdfContent .= '<h2>Email: ' . $email . '</h2>';
$pdfContent .= '<h3>Phone: ' . $phone . '</h3>';
$pdfContent .= '<h3>Category: ' . $category . '</h3>';
$pdfContent .= '<h3>Services: ' . $services . '</h3>';
$pdfContent .= '<h3>Customer Wants: ' . $customer_wants . '</h3>';
$pdfContent .= '<h3>Heard About: ' . $heard_about . '</h3>';
$pdfContent .= '</body></html>';$pdf->writeHTML($pdfContent, true, 0, true, 0);
$pdf->lastPage();
ob_end_clean();
$pdfFileName = 'service_form_submission.pdf';
    $outputPath = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . $pdfFileName; // Absolute path to save the PDF file    
   $pdf->Output($outputPath, 'F');
//    readfile($outputPath);

   // Read the PDF file content
   $pdfContent = file_get_contents($outputPath);

// Prepare and execute SQL query to insert PDF data into database
$stmt = $conn->prepare("INSERT INTO checkout (name, email, phone, category, services, customer_wants, heard_about, pdf_data) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $phone, $category, $services, $customer_wants, $heard_about, $pdfContent);

if ($stmt->execute()) {
    // PDF inserted successfully, continue with other operations like sending emails, etc.
    // Redirect or display success message
    header('Location: thanks.php?pdf=' . $pdfFileName);
    exit;
} 
 
} else {
echo "TCPDF library not found or properly initialized.";
}
}
?>

<?php include "master/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
   <br><br><br><br><br>
<div class="container">
    
        <h2 class="mb-4">PHP & Wordpress Service Form</h2>

       
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="customer_wants" class="form-label">What features and content are you seeking to include on your website?</label>
                <textarea id="customer_wants" name="customer_wants" class="form-control" placeholder="Example: Color, Theme, Functionalities"></textarea>
            </div>

            <div class="mb-3">
                <label for="heard_about" class="form-label">Where did you hear about us?</label>
                <select id="heard_about" name="heard_about" class="form-select" required>
                    <option value="">Select </option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Twitter">Twitter</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category:</label>
                <select id="category" name="category" class="form-select" required>
                    <option value="">Select category</option>
                    <?php
                    $sql = "SELECT * FROM category";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['category_name'] . "'>" . $row['category_name'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <label for="services" class="form-label">Services & Prices:</label>
                <select id="services" name="services" class="form-select" required>
        <?php
        // Check if data is available
        if (!empty($data)) {
            // Loop through data to generate options
            foreach ($data as $row) {
                echo '<option value="' . $row['service_name'] . '">' . $row['service_name'] . ' - ' . $row['price'] . '</option>';
            }
        } else {
            echo '<option value="">No options available</option>';
        }
        ?>
    </select><br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<br>
<hr>




   <?php
include "master/footer.php";
   ?>
