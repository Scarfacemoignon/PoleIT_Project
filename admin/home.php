<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin-home.css"/>
    <title>Blog</title>
</head>
<body>
    <div class="container-admin">
        <!-- Boutons de navigation -->
        <div class="button-container">
            <button><a href="../Action/disconnect.php">Disconnect</a></button>
            <button><a href="article.php">Article</a></button>
        </div>

        <!-- Liste des membres du blog -->
        <div class="user-list">
            <?php 
            require ("Action/session.php");
            require("../Database/connect.php");

            $users = "SELECT * FROM users ";
            $result = $connect->query($users);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row["id"]; ?>
                    <div class="user-card">
                        <h2><?php echo $row["username"]; ?></h2>
                        <p><?php echo $row["mail"]; ?></p>
                        <p><?php echo $row["name"]; ?></p>
                        <p><a href='Action/deleteuser.php?id=<?php echo $id; ?>'><button>Delete</button></a></p>
                    </div>
                <?php }
            } else {
                echo "No users found.";
            }
            $connect->close();
            ?>
        </div>
    </div>
</body>
</html>
