<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in </title>
    
</head>
<body>
    <!-- sign in form-->
    <form action="Action/sign_inAction.php" method="post">
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="username/e-mail" required>
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="password" required>
        <input type="submit" value="sign in">
        <p>create a new account <a href="sign_up.php">sign up</a></p>

    </form>
</body>
</html>
