<?php
session_start();

// Check if the user is not logged in
if (!isset( $_SESSION['username'])) {
    // Redirect to the index (login) page
    header("Location: index.php");
    exit();
}
