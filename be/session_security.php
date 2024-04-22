<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])  !== true){

   header('Location: ../pages/signup-page.php'); // Redirect to login page
    exit; // Stop script execution
}

?>