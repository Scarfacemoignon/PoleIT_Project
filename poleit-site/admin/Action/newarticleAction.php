<?php
require("../../Database/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
    $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '';
    $content = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';
    $date = Date('d/m/y');

    // Limiter la longueur du titre à 100 caractères
    $title = substr($title, 0, 100);

    if(isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];
        $image_size = $image['size'];
        $image_error = $image['error'];
        if (!empty($image_name)) {
            $image_destination = "./pictures/" .uniqid() .$image_name;
            move_uploaded_file($image_tmp_name, $image_destination);
        }
        else{
            echo "Chemin introuvable";
        }
        $insert_query = "INSERT INTO article (title, description, content, image, create_date) VALUES 
            ('$title', '$description', '$content', '$image_destination', '$date')";
        $result = mysqli_query($connect, $insert_query);
        if ($result) {
            echo "Article inséré avec succès dans la base de données.";
        } 
        else {
            echo "Erreur lors de l'insertion de l'article dans la base de données: " . mysqli_error($connect);
        }
    }
} else {
    echo "Une erreur s'est produite lors de l'envoi de l'image.";
}
?>
















