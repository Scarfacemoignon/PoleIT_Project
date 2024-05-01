<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new Article </title>
    
</head>
<body>
<!-- new article form-->
<?php 
require ("Action/session.php");
?>

<form action="Action/newarticleAction.php" method="post">
        <label for="title"></label>
        <input type="text" id="title" name="title" placeholder="title"  required>
        <label for="description"></label>
        <input type="text" id="description" name="description" placeholder="description" required>
        <label for="content"></label>
        <input type="text" id="content" name="content" placeholder="content" minlength="20" maxlength="999" required> <br><br>
        <input type="submit" value="create">
        


</body>
</html>

