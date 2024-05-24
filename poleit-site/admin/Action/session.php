<?php
// Assurez-vous qu'il n'y a pas de sortie HTML ou de texte envoyé avant l'appel à session_start()

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php");
    exit;
}

$username = $_SESSION['username'];
?>
