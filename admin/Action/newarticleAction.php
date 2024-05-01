<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" >
    <title>new article Action</title>
</head>
<body>
<?php 
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

    
?>
    
</body>
</html>




