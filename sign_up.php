<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    
</head>
<body>
    <!-- sign up form-->
    <form action="Action/sign_upAction.php" method="post">
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="name" required>
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="username/e-mail" required>
        <label for="mail"></label>
        <input type="e-mail" id="mail" name="mail" placeholder="e-mail" required>
        <label for="birthdate"></label>
        <input type="date" id="birthdate" name="birthdate" required>
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="password" minlength="8" required>
        <input type="submit" value="sign up">
        <p> <a href="sign_in.php">sign in</a></p>

    </form>
</body>
</html>
