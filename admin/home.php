<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog </title>
    
</head>
<body>
<!-- admin's homepage. show all the blog members-->
<button><a href="../Action/disconnect.php">disconnect</a></button>
<button><a href="article.php">article</a></button>

<?php 

require ("Action/session.php");
require("../Database/connect.php");


$users = "SELECT * FROM users ";
  $result = $connect->query($users);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        echo "<h2>" . $row["username"] . "</h2>";
        echo "<p>" . $row["mail"] . "</p>";
        echo "<p>" . $row["name"] . "</p>";
        echo "<p><a href='Action/deleteuser.php? id=$id'><button>Delete</button></a></p>";
    }
} else {
    echo "No users found.";
}
$connect->close();

?> 

</body>
</html>

