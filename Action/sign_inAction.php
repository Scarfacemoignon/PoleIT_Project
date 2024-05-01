<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" >
    <title>sign in action</title>
</head>
<body>
<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];

require("../Database/connect.php"); 

$verify = "SELECT * FROM Users WHERE username='$username' OR mail='$username'";
    $resultat = $connect->query($verify);

    if ($resultat->num_rows == 1) {
        $row = $resultat->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["username"] = $username;

            if ($row["role"] == "customer"){
                header("Location: ../homeblog.php");
            }
            if ($row["role"] == "admin"){
                header("Location: ../admin/home.php");
            }
         
    } }
    echo "<p>Your username/email or your password is incorrect.<a href='../sign_in.php'>Try again</a></p>";

    $connect->close();

} else {
    echo"Error";
}


    
?>
    
</body>
</html>




