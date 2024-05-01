<?php
    require('../../Database/connect.php');
   
   
$id = $_GET["id"];

$select = "SELECT username FROM users WHERE id = '$id' ";
$result = $connect->query($select);

    if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $use = $user["username"];
    $delete = "DELETE FROM users WHERE id = $id";

    if ($connect->query($delete) == TRUE) {
        echo "The member $use has benn deleted";
    } else {
        echo "Error : " . $connect->error;
    }
    
    //$delete2 = "DELETE FROM reply WHERE PSEUDO = '$use'";
    header("Location: ../home.php");

} ?> 