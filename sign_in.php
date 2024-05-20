<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
	<div class="container">
		<div class="left-side">
			<img src="images/satellite2.jpg" alt="Satellite">
		</div>
		
		<div class="right-side">
			<form action="Action/sign_inAction.php" method="POST">
				<label for="username">Username:</label><br>
				<input type="text" id="username" placeholder="Username or E-mail" name="username" required><br>
				<label for="password">Password:</label><br>
				<input type="password" id="password" placeholder="password" name="password" required><br>
				<input type="submit" value="Sing in">
			</form>
			<p>Don't have an account? <a href="sign_up.php">Register here</a></p>
		</div>
	</div>
</body>
</html>

