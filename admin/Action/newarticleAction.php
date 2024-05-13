<?php
// Connexion à la base de données
require("../../Database/connect.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier et traiter le titre
    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
    
    // Vérifier et traiter la description
    $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '';
    
    // Vérifier et traiter le contenu
    $content = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';

    // Traitement de l'image
    if(isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];
        $image_size = $image['size'];
        $image_error = $image['error'];

        // Vérification de l'erreur d'envoi de l'image
        if ($image_error === UPLOAD_ERR_OK) {
            // Déterminer le chemin de destination de l'image
            $image_destination = 'images/img/' . $image_name;

            // Déplacer l'image téléchargée vers un emplacement de stockage
            if (move_uploaded_file($image_tmp_name, $image_destination)) {
                // Requête SQL pour insérer l'article dans la base de données
                $insert_query = "INSERT INTO article (title, description, content, image) VALUES 
                                ('$title', '$description', '$content', '$image_name')";

                // Exécution de la requête
                $result = mysqli_query($connect, $insert_query);

                // Vérifier si l'insertion a réussi
                if ($result) {
                    echo "Article inséré avec succès dans la base de données.";
                } else {
                    echo "Erreur lors de l'insertion de l'article dans la base de données: " . mysqli_error($connect);
                }
            } else {
                echo "Une erreur s'est produite lors du téléchargement de l'image.";
            }
        } else {
            // Si une erreur d'envoi de l'image s'est produite
            echo "Une erreur s'est produite lors de l'envoi de l'image.";
        }
    } else {
        echo "Aucune image n'a été téléchargée.";
    }
}
?>















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" >
    <title>new article Action</title>
</head>
<body>
     <?php /*
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$title = nl2br($_POST['title']);
$description = nl2br($_POST['description']);
$content = nl2br($_POST['content']);

echo $title, $description, $content; 

require("../../Database/connect.php"); 

$date = Date('d/m/y');

$insert = "INSERT INTO article (title, description, content, create_date) VALUES 
('$title', '$description', '$content', '$date')";
$resulat = mysqli_query($connect,$insert);
        
header("Location: ../article.php");

   
    
       
        
       
    

}

    
*/?> 
    
</body>
</html> -->




