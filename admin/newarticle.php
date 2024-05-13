<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/new-article.css"/>
    <title>New Article</title>
</head>
<body>
    <div class="container-new-article">
        <h1>New Article</h1>
        <!-- Formulaire pour un nouvel article -->
        <form action="Action/newarticleAction.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre de l'article" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" placeholder="Description de l'article" required>
            </div>
            <div class="form-group">
                <label for="content">Contenu :</label>
                <textarea id="content" name="content" placeholder="Contenu de l'article" minlength="20" maxlength="999" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Créer">
            </div>
        </form>
    </div>
</body>
</html>














<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/new-article.css"/>
    <title>New Article</title>
</head>
<body>
    <div class="container-new-article">
        <h1>New Article</h1> -->
        <!-- Formulaire pour un nouvel article -->
        <!-- <form action="Action/newarticleAction.php" method="post">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre de l'article" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" placeholder="Description de l'article" required>
            </div>
            <div class="form-group">
                <label for="content">Contenu :</label>
                <textarea id="content" name="content" placeholder="Contenu de l'article" minlength="20" maxlength="999" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Créer">
            </div>
        </form>
    </div>
</body>
</html> -->
