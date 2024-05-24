<?php 
    require ("Action/sessionsecure.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/homeblog4.css"/>
    <title>Article</title>
</head>
<body>
    <div class="navbar">
        <?php include 'include/navbar.php'; ?>
    </div>

    <header class="hero-section">
        <div class="hero-content">
            <h1>Restez informé avec PoleIT</h1>
            <p>Les articles de PoleIT vous fournissent les dernières informations de notre blogs sur l'espace.</p>
        </div>
    </header>

    <main class="blog-section">
        <h2>Nos articles PoleIT</h2>
        <br>
        <hr>
        <br>
        <?php 
            require ("Database/connect.php");

            $article = "SELECT * FROM article ORDER BY id DESC";
            $result = $connect->query($article);

            if ($result->num_rows > 0) {
                echo '<div class="blog-list">';
                while($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    ?>
                    <div class="blog-item">
                    <img src="admin/Action/<?php echo $row["image"];?>">
                    <div class="blog-info">
                    <h3> Titre :  <?php echo $row["title"];  ?> </h3>
                    <p> Description : <?php echo $row["description"]; ?> </p>
                    <p> Date : <?php echo $row["create_date"]; ?> </p>
                    </div>
                    <a href="viewarticle.php?id=<?php echo $id?>" class="read-more">→</a>
                    </div>
                    <hr> 
                    </div>
                        
                    <?php
                }   
            
                    ?>
                
            <?php
             }else {
                echo "<p>No article found.</p>";
            } 
            $connect->close();
        ?>
    </main>
</body>
</html>
