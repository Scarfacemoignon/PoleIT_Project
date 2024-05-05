<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body> 
    <div class="topnav">
        <div class="img-logo">
            <img src="images/ico.png">
            <a href="index.php">PoleIT</a>
        </div> 
        
        <?php
        if(isset($_SESSION['username'])) {
            echo '<a href="Action/disconnect.php">Logout</a>';
        }
        ?>
               
        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="homeblog.php">Blog</a>
        <a class="active" href="index.php">Home</a>
        
    </div>
</body>
</html>
