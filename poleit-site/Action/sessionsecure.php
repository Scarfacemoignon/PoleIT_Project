<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit;
}
$username = $_SESSION['username'];
?>
