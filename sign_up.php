<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body class="body_sign_up">
            <!-- sign up form-->
        <div class="sign_up_block">
            <form action="Action/sign_upAction.php" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username or Email" required>
                <label for="mail">Email</label>
                <input type="email" id="mail" name="mail" placeholder="Email" required>
                <label for="birthdate">Birthday</label>
                <input type="date" id="birthdate" name="birthdate" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" minlength="8" required>
                <input type="submit" value="sign up">
                <p> Do you already have an account? <a href="sign_in.php">Sign in</a></p>
            </form>
        </div>
</body>
</html>
