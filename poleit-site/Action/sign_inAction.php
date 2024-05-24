<?php 
// Démarre la session avant tout autre contenu
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require("../Database/connect.php"); 

    $verify = "SELECT * FROM users WHERE username='$username' OR mail='$username'";
    $resultat = $connect->query($verify);

    if ($resultat->num_rows == 1) {
        $row = $resultat->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Démarre la session ici une fois que les informations de connexion sont vérifiées
            $_SESSION["username"] = $username;

            if ($row["role"] == "customer"){
                header("Location: ../homeblog.php");
                exit; // N'oubliez pas d'ajouter exit après une redirection pour arrêter l'exécution du script
            }
            if ($row["role"] == "admin"){
                header("Location: ../admin/home.php");
                exit; // N'oubliez pas d'ajouter exit après une redirection pour arrêter l'exécution du script
            }
        }
    }

    // Si les informations de connexion sont incorrectes ou si l'utilisateur n'existe pas
    echo "<p>Your username/email or your password is incorrect.<a href='../sign_in.php'>Try again</a></p>";

    $connect->close();

} else {
    echo "Error";
}
?>
