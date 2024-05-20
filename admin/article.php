<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/article2.css"/>
    <title>Article</title>
</head>
<body>

    <h1>Articles Dashbord</h1>
    <hr>

    <div class="article-container">
        <?php 
        require ("Action/session.php");
        require("../Database/connect.php");

        $article = "SELECT * FROM article";
        $result = $connect->query($article);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                echo "<div class='article'>";
                echo "<h2>Titre: " . $row["title"] . "</h2>";
                echo "<p>Description: " . $row["description"] . "</p>";
                echo "<p><a href='Action/deletearticle.php?id=$id' class='button-article'>Delete</a></p>";
                echo "<hr>";
                echo "</div>";
            }
        } else {
            echo "<p>No article found.</p>";
        }
        $connect->close();
        ?> 
         <div class="button-content">
            <a href="newarticle.php" class="button-article1">New article</a>
        </div>
    </div>
</body>
    

   
</html>
