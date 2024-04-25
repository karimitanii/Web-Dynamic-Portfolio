<?php
session_start();
session_destroy();
header("Location: ../pages/signup-page.php");
exit;
?>
