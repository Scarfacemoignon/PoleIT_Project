<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article </title>
    
</head>
<body>
<!-- show articles of the blog-->
<button><a href="newarticle.php">new article</a></button>

<?php 

require ("Action/session.php");
require("../Database/connect.php");


$article = "SELECT * FROM article ";
$result = $connect->query($article);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p><a href='Action/deletearticle.php? id=$id'><button>Delete</button></a></p>";
    }
} else {
    echo "No article found.";
}
$connect->close();

?> 

</body>
</html>

