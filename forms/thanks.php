<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
        }

        .jumbotron {
            background-color: #fff;
            color: #333; /* Dark text color */
            padding: 50px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }

        .btn-primary {
            background-color: #047aed; /* Blue button background */
            border-color: #047aed; /* Blue button border */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }

        a {
            color: #047aed; /* Blue link color */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline; /* Underline link on hover */
        }

        .lead {
            font-size: 1.25rem; /* Larger text size for lead paragraphs */
            font-weight: 400; /* Normal font weight */
        }

        h1 {
            font-family: 'Roboto', sans-serif; /* Custom font for headings */
            font-size: 3rem; /* Large heading size */
            font-weight: 700; /* Bold font weight */
            margin-bottom: 20px;
        }

        hr {
            margin: 30px 0; /* Space above and below the horizontal rule */
            border-top: 2px solid #dcdcdc; /* Light gray border */
        }

        @media (max-width: 576px) {
            .jumbotron {
                padding: 30px; /* Smaller padding on small screens */
            }
            h1 {
                font-size: 2.5rem; /* Smaller heading size on small screens */
            }
            .lead {
                font-size: 1.1rem; /* Smaller text size for lead paragraphs */
            }
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You!</h1>
        <h3>Your PDF download should start automatically.</h3>
        <br>
        <p>We have received your request to buy a website. Here are the details:</p>
        <p>A member of our team will contact you shortly to discuss further details and provide payment information.</p>
        <p>Thank you again for choosing us for your website needs!</p>
        <hr>
        <p>
            Having trouble? <a href="contact.php">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="../index.php" role="button">Continue to homepage</a>
        </p>
        <hr>
        <?php
             include "../dashboard/auth/conn.php";
          $sql = "SELECT services.delivery_time, prices FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    
   
    while($row = $result->fetch_assoc()) {
        echo '<br>';
        echo "<li>" . $row['delivery_time'] . ": " .  $row['prices'] . "</li>";
    }
  
} else {
    echo "No services found";
}
$conn->close();
?>
    </div>
  
    <script>
  setTimeout(function() {
    window.location.href = 'download_pdf.php?pdf=<?php echo $_GET['pdf']; ?>';
  }, 2000); 
</script>
     <!-- <script>
        // Function to initiate the download
        function downloadPDF() {
            // Create an anchor element
            var link = document.createElement('a');
            link.href = 'service_form_submission.pdf'; // Path to the PDF file
            link.download = 'service_form_submission.pdf'; // File name for download
            link.style.display = 'none'; // Hide the link
            document.body.appendChild(link); // Add the link to the document
            link.click(); // Simulate a click to trigger the download
            document.body.removeChild(link); // Remove the link from the document
        }

        // Call the download function after a delay (e.g., 2 seconds)
        setTimeout(downloadPDF, 2000); // Adjust the delay as needed
    </script> -->
   
</body>
</html>
