<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<?php 
require ("Action/sessionsecure.php");
?> 
<div class="navbar"> 
<?php include 'include/navbar.php'; ?>
</div>


<header class="hero-section">
    <div class="hero-content">
        <h1>Keep up with PoleIT</h1>
        <p>PoleIT's blogs provide you with the latest information from agency missions and programs.</p>
    </div>
</header>

<body>

<main class="blog-section">
    <h2>PoleIT Blogs</h2>
    <div class="blog-list">
        <div class="blog-item">
            <img src="path/to/commercial-crew.jpg" alt="Commercial Crew">
            <div class="blog-info">
                <h3>Commercial Crew</h3>
                <p>PoleIT's Commercial Crew Program works with industry to facilitate safe, reliable, and cost-effective access to low Earth orbit.</p>
            </div>
            <a href="#" class="read-more">&rarr;</a>
        </div>
        <div class="blog-item">
            <img src="path/to/osiris-rex.jpg" alt="OSIRIS-REx">
            <div class="blog-info">
                <h3>OSIRIS-REx</h3>
                <p>The first U.S. mission to collect a sample from an asteroid, OSIRIS-REx will return to Earth on Sept. 24, 2023, with material from asteroid Bennu.</p>
            </div>
            <a href="#" class="read-more">&rarr;</a>
        </div>
        <div class="blog-item">
            <img src="path/to/artemis.jpg" alt="Artemis">
            <div class="blog-info">
                <h3>Artemis</h3>
                <p>Artemis is the first step in the next era of human exploration. Together with commercial and international partners, NASA will establish a sustainable presence on the Moon.</p>
            </div>
            <a href="#" class="read-more">&rarr;</a>
        </div>
    </div>
</main>

</body>
</html>
