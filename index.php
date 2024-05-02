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

<?php 
require ("Database/connect.php");
// Last articles in the blog
$article = "SELECT * FROM article ";
$result = $connect->query($article);


  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc() ) {
        
        $id = $row["id"];
        echo"<div class= 'article'>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
        
    
}} else {
    echo "No article found.";
} 
$connect->close();
echo"</div>";

?>
    <script>
          let slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
    </script>
</body>
</html>