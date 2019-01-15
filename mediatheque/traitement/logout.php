<?php
session_start();

unset($_SESSION['id']);
$_SESSION['message'] = 'A très vite !';
header('location: ../index.php');

?>
