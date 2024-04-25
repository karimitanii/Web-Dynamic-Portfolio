<?php
session_start();


if (!isset($_SESSION["username"])){

   header('Location: ../pages/signup-page.php'); 
    exit; 
}

?>