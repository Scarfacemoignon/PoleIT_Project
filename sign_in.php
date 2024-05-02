<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body class="body_sign_in">
    <!-- sign in form-->
    <div class="sign_in_block">
        <form action="Action/sign_inAction.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="username or email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password" required>
            <input type="submit" value="sign in">
            <p>You don't have an account ? create a new one <a href="sign_up.php">Sign up</a></p>

        </form>
    </div>   
</body>
</html>
