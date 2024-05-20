<?php
require ("Action/session.php");
require("../Database/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin-home4.css">
    <title>Admin</title>
</head>
<body>

    <h1>Admin Dashbord</h1>
    <div class="container-admin">
       
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $users = "SELECT * FROM users";
                $result = $connect->query($users);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $id = $row["id"]; 
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $row["username"]; ?></td>
                            <td><?php echo $row["mail"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><a href='Action/deleteuser.php?id=<?php echo $id; ?>'><button class='delete-button'>Supprimer</button></a></td>
                        </tr>
                    <?php }
                } else {
                    echo "<tr><td colspan='5'>Aucun utilisateur trouvé.</td></tr>";
                }
                $connect->close();
                ?> 
            </tbody>
        </table>
    </div>
    <br>

    <div class="button-container">
        <button><a href="../Action/disconnect.php">Déconnexion</a></button>
        <button class="article"><a href="article.php">Articles</a></button>
    </div>

</body>
</html>
