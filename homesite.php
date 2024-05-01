<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>
<body>
<!-- navbar for homesite-->
<div class="navbar"> 
<ul><a href="homeblog.php"><li>Blog</li></a>
<a href="#"><li>About us</li></a>
</ul>
</div>

<?php 
require ("Database/connect.php");
// Last articles in the blog
$article = "SELECT * FROM article ";
$result = $connect->query($article);


  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc() ) {
        
        $id = $row["id"];
        echo"<div class= 'article'>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
        
    
}} else {
    echo "No article found.";
} 
$connect->close();
echo"</div>";

?>

</body>
</html>