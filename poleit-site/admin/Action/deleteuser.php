<?php
require('../../Database/connect.php');

$id = $_GET["id"];

$select = "SELECT username FROM users WHERE id = '$id' ";
$result = $connect->query($select);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $use = $user["username"];
    $delete = "DELETE FROM users WHERE id = $id";

    if ($connect->query($delete) === TRUE) {
        // Utiliser un message de confirmation sans redirection
        echo "The member $use has been deleted";

        // Supprimer le contenu envoyé à la sortie avant la redirection
        ob_clean();

        // Rediriger après le traitement complet
        header("Location: ../home.php");
        exit(); // Assure que le script se termine après la redirection
    } else {
        echo "Error : " . $connect->error;
    }
}
?>
