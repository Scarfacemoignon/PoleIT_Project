<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
<!-- Blog main page after sign in-->
<?php 
require ("Action/sessionsecure.php");
echo "Home blog";?> 
<a href="Action/disconnect.php">disconnect</a>
</body>
</html>