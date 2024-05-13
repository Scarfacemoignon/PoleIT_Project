<!DOCTYPE html>
<html lang="en">
<!-- J'ai enlevé le head pour le mettre dans le dossier include et l'appeler chaque fois. ce que je trouve plus pratique -->
<?php include 'include/head.php'; ?>
<body>
<!-- navbar for homesite-->
<div class="navbar"> 
<?php include 'include/navbar.php'; ?>
</div>
         <!-- Début de la Caroussel -->
         <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img class="img-caroussel" src="images/planet.jpg">
    <div class="big-title">A planetarium</div>
    <div class="small-title">PoleIT</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img class="img-caroussel" src="images/observatoire.jpg">
    <div class="big-title">An observatory</div>
    <div class="small-title">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img class="img-caroussel" src="images/lune.jpg">
    <div class="big-title">Daytime exhibitions</div>
    <div class="small-title">Caption Three</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img class="img-caroussel" src="images/satelite.jpg">
    <div class="big-title">Night exhibitions</div>
    <div class="small-title">Caption four</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img class="img-caroussel" src="images/activity.jpg">
    <div class="big-title">Daily activities for <br>young and old</div>
    <div class="small-title">Caption five</div>
  </div>

  <!-- Boutons précédent/suivant -->
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
</div>
<br>

<!-- Indicateurs de position -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

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
      <!--//////////////////////////////////////////////////////////////-->
           <div class="container-article">
                <div class="bloc-article">
                    <div class="bloc-image">
                      <img src="images/vaisseau.jpg" alt="Image 1">
                    </div>
                    <div class="bloc-text">
                      <h2>Le décollage du vaisseau Starliner de Boeing et ses premiers astronautes reporté</h2>
                      <h3>Une anomalie a été identifiée sur une valve de la fusée Atlas V qui devait propulser la capsule en orbite.</h3>
                      <p>
                      Le décollage du vaisseau Starliner de Boeing, qui devait pour la première fois transporter des astronautes de la NASA vers la Station spatiale internationale, a été annulé lundi environ deux heures avant l'heure prévue du lancement, à cause d'un problème technique.

Une anomalie a été identifiée sur une valve de la fusée Atlas V qui devait propulser la capsule en orbite, a annoncé le constructeur du lanceur, le groupe ULA.

« La priorité de la NASA est la sécurité », a immédiatement réagi le patron de l'agence spatiale américaine, Bill Nelson. Le décollage aura lieu « quand nous serons prêts », a-t-il écrit sur X.

Une nouvelle tentative de décollage peut théoriquement avoir lieu mardi, ainsi que vendredi et samedi, mais aucune nouvelle date n'a été annoncée dans l'immédiat.

Boeing joue gros sur cette ultime mission test, qui doit lui permettre de rejoindre le club très privé des vaisseaux spatiaux ayant transporté des êtres humains.

Le géant de l'industrie aérospatiale doit démontrer que son véhicule est sûr avant de commencer les missions régulières vers la Station spatiale (ISS) — avec quatre ans de retard sur SpaceX.

Les astronautes américains Butch Wilmore et Suni Williams devaient décoller à 22 h 34 de Cap Canaveral en Floride.

                      </p>
                    </div>
                </div>
                <br>
                <div class="bloc-article">
                  <div class="bloc-text">
                      <h2>La Station spatiale internationale comme si on y était</h2>
                      <h3>Le réalisme n'aura jamais été aussi saisissant, et ce, grâce à des caméras de réalité virtuelle ultraperfectionnées.</h3>
                      <p>
                      Observer les astronautes à bord de la Station spatiale internationale dans l'action comme si on était à leurs côtés. Voir et ressentir les émotions qu'ils éprouvent quand ils admirent notre planète depuis les hublots et quand ils se retrouvent dans l'immensité du vide de l'espace pour effectuer des réparations. C'est ce que propose l'expérience immersive Space Explorers: L'INFINI, qui est présentée au Vieux-Port de Montréal par Expériences INFINITY, une coentreprise formée du Studio Phi et de Felix & Paul Studios.

Tous les astronautes qui ont séjourné à la Station spatiale internationale soulignent la chance inouïe qu'ils ont eue de vivre cette expérience unique. Grâce à Space Explorers: L'INFINI, ils ne seront plus les seuls, le grand public y ayant désormais accès, et ce, sans quitter la Terre.

Le réalisme n'aura jamais été aussi saisissant, et ce, grâce à des caméras de réalité virtuelle équipées de neuf capteurs 4K qui filment en format 3D sur 360 degrés, mises au point par Felix & Paul Studios de Montréal. L'une de ces caméras a été utilisée pour filmer diverses scènes de la vie quotidienne des astronautes à l'intérieur de la Station. L'autre, qui a été adaptée pour faire face aux conditions du vide spatial, a été attachée au bout du bras canadien, lequel a « servi de grue cinématographique permettant de bouger la caméra autour de la SSI et de filmer la sortie dans l'espace de deux astronautes », a précisé Félix Lajeunesse, cofondateur de Felix & Paul Studios et chef de la création.

Les caméras ont été équipées d'un système de ventilation pour évacuer la chaleur qu'elles accumulaient en raison de l'absence de gravité. Et celle ayant servi au tournage à l'extérieur a été conçue « pour résister à l'absence de pression et aux écarts de température pouvant atteindre 400 °C entre les moments où les rayons du Soleil frappaient la caméra et ceux où le Soleil était derrière la Terre. 
                      </p>
                  </div>
                  <div class="bloc-image">
                    <img src="images/station.jpg" alt="Image 2">
                  </div>
                </div>
                <div class="hr-article"></div>
          </div>




      <!--//////////////////////////////////////////////////////////////-->

<!-- /* debut bloc pour la gallery */ //////////////////////////////////////////////////////////////-->
      <h2 class="title-gallery">Our Gallery</h2>
          <div class="gallery">
          
            <div class="gallery-item">
              <img src="images/galerie/1.jpg" alt="Image 1">
              <div class="overlay">
                <div class="text">Image 1</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/2.jpg" alt="Image 2">
              <div class="overlay">
                <div class="text">Image 2</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/8.jpg" alt="Image 3">
              <div class="overlay">
                <div class="text">Image 3</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/4.jpg" alt="Image 4">
              <div class="overlay">
                <div class="text">Image 4</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/5.jpg" alt="Image 4">
              <div class="overlay">
                <div class="text">Image 4</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/6.jpg" alt="Image 6">
              <div class="overlay">
                <div class="text">Image 6</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/7.jpg" alt="Image 7">
              <div class="overlay">
                <div class="text">Image 7</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/3.jpg" alt="Image 8">
              <div class="overlay">
                <div class="text">Image 8</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/9.jpg" alt="Image 9">
              <div class="overlay">
                <div class="text">Image 9</div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="images/galerie/10.jpg" alt="Image 10">
              <div class="overlay">
                <div class="text">Image 10</div>
              </div>
            </div>
            <!-- Add more gallery items as needed -->
          </div>
          <br>
<!-- /* Fin bloc pour la gallery */ -->
<!--//////////////////////////////////////////////////////////////-->

      <?php include 'include/footer.php'; ?>

    <script src="js/script.js"></script>
    <!-- <script src="js/cards.js"></script> -->
</body>
</html>