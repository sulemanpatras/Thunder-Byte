<?php 
include '../dashboard/auth/conn.php';

$categories = [
    'Landing Page Website' => 10,
    'Portfolio' => 20,
    'Blogs' => 30,
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $phone = $_POST["phone"];
    $category = $_POST["category"]; 
    $price = $_POST["price"]; 

    // Add validation for phone number format and length
    // if (!preg_match("/^[0-9]{10}$/", $phone)) {
    //     // Handle invalid phone number format
    //     echo "Invalid phone number format. Please enter a 10-digit phone number.";
    // } else {
        $sql = "INSERT INTO `form` (`naam`,`phone`, `category`, `price`) VALUES ('$naam','$phone', '$category', '$price')";
        if (mysqli_query($conn, $sql)) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Your Request has been Sent Successfully.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div';
        } else {
            echo mysqli_error($conn);
        }
    }
    


mysqli_close($conn);
?>