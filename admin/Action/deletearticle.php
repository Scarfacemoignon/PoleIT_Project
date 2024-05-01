<?php
    require('../../Database/connect.php');
   
   
$id = $_GET["id"];

$select = "SELECT title FROM article WHERE id = '$id' ";
$result = $connect->query($select);

    if ($result->num_rows > 0) {
    $title = $result->fetch_assoc();
    $title = $title["title"];
    $delete = "DELETE FROM article WHERE id = $id";

    if ($connect->query($delete) == TRUE) {
        echo "The article $title has benn deleted";
    } else {
        echo "Error : " . $connect->error;
    }
    
    header("Location: ../article.php");

} ?> 