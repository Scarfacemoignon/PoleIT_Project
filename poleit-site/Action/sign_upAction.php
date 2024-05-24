<?php 
// Supprimez toute sortie avant session_start()
// Assurez-vous qu'il n'y a pas d'espaces, de lignes vides ou de sortie HTML avant la balise <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $birthdate = $_POST['birthdate'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_BCRYPT);

    require("../Database/connect.php");

    $verify = "SELECT * FROM users WHERE username='$username'";
    $verify2 = "SELECT * FROM users WHERE mail='$mail'";
            
    $resultat = mysqli_query($connect,$verify);
    $resulat2 = mysqli_query($connect,$verify2);
            
    $lines = mysqli_num_rows($resultat);
    $lines2 = mysqli_num_rows($resulat2);
            
    if($lines>0) {
        echo"<p>This username already exists, please choose another one!</p>";
        exit();
    }  
            
    if($lines2>0) {
        echo"<p>This email address already exists, would you like to <a href='../sign_in.php'>login</a>?</p>";
        exit();
    } 
                
    $insert = "INSERT INTO users (name, username, mail, birthdate, password) VALUES ('$name', '$username', '$mail', '$birthdate', '$password')";
    $resulat = mysqli_query($connect,$insert);

    // Redirigez après le traitement du formulaire
    header("Location: ../homeblog.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Sign up action</title>
</head>
