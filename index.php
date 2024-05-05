<!DOCTYPE html>
<html lang="en">
<!-- J'ai enlevé le head pour le mettre dans le dossier include et l'appeler chaque fois. ce que je trouve plus pratique -->
<?php include 'include/head.php'; ?>
<body>
<!-- navbar for homesite-->
<div class="navbar"> 
<?php include 'include/navbar.php'; ?>
</div>

      <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 5</div>
              <img src="images/background-signin.jpg">
              <div class="text">PoleIT</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 5</div>
              <img src="images/background-signup.jpg">
              <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 5</div>
              <img src="images/cours.jpg">
              <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">4 / 5</div>
              <img src="images/pubsaf.jpg">
              <div class="text">Caption four</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">5 / 5</div>
              <img src="images/planet.jpg">
              <div class="text">Caption five</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

      </div>
        <br>

      <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span> 
      </div>

     <!-- /* debut bloc pour les cards */ -->
      <?php 
      require ("Database/connect.php");

      // Last articles in the blog
      $article = "SELECT * FROM article ORDER BY id DESC LIMIT 6";
      $result = $connect->query($article);

      if ($result->num_rows > 0) {
          echo '<section class="card-list">';
          echo '<h2 class="latest_article">Latest Articles</h2>';
          echo "<p>PoleIT's Aeronautics Research Mission Directorate is working to enable industry to introduce transformative options for future air travel in at least four major areas.</p>";
          echo '<div class="card-container">';
          while($row = $result->fetch_assoc()) {
              $id = $row["id"];
              echo '<div class="card-item">';
              echo '<img src="images/planet.jpg" alt="Article">';
              // echo '<img src="' . $row["image_path"] . '" alt="Article">';
              echo '<div class="card-content">';
              echo '<h3>' . $row["title"] . '</h3>';
              echo '<p>' . $row["description"] . '</p>';
              echo '<a href="homeblog.php?id=' . $id . '" class="read-more">Read More</a>';
              echo '</div>';
              echo '</div>';
          }
          echo '</div>';
          echo '</section>';
      } else {
          echo "No article found.";
      } 
      $connect->close();
      ?>

      <!-- /* Fin bloc pour les cards */ -->


    <script src="js/script.js"></script>
    <!-- <script src="js/cards.js"></script> -->
</body>
</html>