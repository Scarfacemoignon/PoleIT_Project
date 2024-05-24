<?php 
    require("Action/sessionsecure.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/viewarticle.css"/>
    <title>Article</title>
</head>

<body>
    <div>
        <?php include 'include/navbar.php'; ?>
    </div>
    <br>
    <header class="hero-section">
        <div class="hero-content">
            <h1>Nous vous présentons les meilleures articles</h1>
            <p>N'hésitez pas à bien profiter du contenu 😋</p>
        </div>
    </header>
    <br>
    
    <main class="blog-section">
        <?php
            $id = $_GET["id"]; 
            require("Database/connect.php");

            $article = "SELECT * FROM article WHERE id = $id";
            $result = $connect->query($article);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $emoji_replace = array(':)', ':(', ':3', ';-)', ':-)', ':-(', '<3', ':D', 'xD', 'x)', "x')", ':o', ':O', 'oO');
                    $emoji_path = array(
                        '<img src="images/emojis/emo_smile.png" class="emojis"/>',
                        '<img src="images/emojis/emo_sad.png" class="emojis"/>',
                        '<img src="images/emojis/emo_cat.png" class="emojis"/>',
                        '<img src="images/emojis/emo_wink.png" class="emojis"/>',
                        '<img src="images/emojis/emo_smile.png" class="emojis"/>',
                        '<img src="images/emojis/emo_sad.png" class="emojis"/>',
                        '<img src="images/emojis/coeur1.png" class="emojis"/>',
                        '<img src="images/emojis/emo_smile.png" class="emojis"/>',
                        '<img src="images/emojis/emo_smile.png" class="emojis"/>',
                        '<img src="images/emojis/emo_smile.png" class="emojis"/>',
                        '<img src="images/emojis/emo_laugh.png" class="emojis"/>',
                        '<img src="images/emojis/emo_surprised.png" class="emojis"/>',
                        '<img src="images/emojis/emo_surprised.png" class="emojis"/>',
                        '<img src="images/emojis/emo_confused.png" class="emojis"/>'
                    );

                    foreach (['title', 'description', 'content'] as $field) {
                        if (isset($row[$field]) && $row[$field] !== null) {
                            $row[$field] = str_replace($emoji_replace, $emoji_path, $row[$field]);
                            $row[$field] = detecterLiens($row[$field]);
                        }
                    }
                    ?>
                    <h1><?php echo $row["title"]; ?></h1>
                    <br>
                    <img class="imgarticle" src="admin/Action/<?php echo $row["image"]; ?>">
                    <br>
                    <h3 class="description"><?php echo $row["description"]; ?></h3>
                    <p class="date">Published on: <?php echo $row["create_date"]; ?></p>
                    <hr>
                    <p class="contenu"><?php echo $row["content"]; ?></p>
                    <?php 
                }
            } else {
                echo "<p>Article non trouvé.</p>";
            }

            $connect->close();
        ?>
    </main>
</body>
</html>
<?php
function detecterLiens($texte) {
    // Expression régulière pour détecter les liens URL
    $regex = '%(https?:\/\/|www\.)([a-zA-Z0-9-_\.\/\?=&]+)%';

    // Remplace les liens par des balises d'ancrage
    $texte = preg_replace($regex, '<a href="$0" target="_blank">$0</a>', $texte);

    return $texte;
}
?>



