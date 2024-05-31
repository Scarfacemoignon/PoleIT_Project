<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
  <div class="navbar"> 
    <?php include 'include/navbar.php'; ?>
  </div>
        
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img class="img-caroussel" src="images/planet.jpg">
      <div class="big-title">Welcome To <br> POLE-IT</div>
      <div class="small-title"></div>
    </div>

    <div class="mySlides fade">
      <img class="img-caroussel" src="images/observatory.jpg">
      <div class="big-title">An <br> observatory</div>
      <div class="text"> 
      observatory is a specialized facility, often located on a mountaintop or in a remote area, equipped with powerful instruments like <br>
      telescopes or sensors to study the universe (stars, planets, galaxies) or natural phenomena on Earth (weather, earthquakes, oceans) 
      </div>
      <div class="small-title"></div>
    </div>

    <div class="mySlides fade">
      <img class="img-caroussel" src="images/lune.jpg">
      <div class="big-title">Daytime <br> exhibitions</div>
      <div class="text"> 
      This is the most likely interpretation. It could be used to describe museums, art galleries, or other exhibition spaces that are <br>
      typically open during daylight hours (as opposed to those with evening or nighttime hours). 
      </div>
      <div class="small-title"></div>
    </div>

    <div class="mySlides fade">
      <img class="img-caroussel" src="images/satelite.jpg">
      <div class="big-title">Night <br> exhibitions</div>
      <div class="text"> 
      Night exhibitions, also sometimes called "night at the museum" events, are special occasions where museums, galleries, or other <br>
      exhibition spaces stay open after dark, often offering unique experiences. These events can feature: <br>
      Special lighting: Galleries might be illuminated with mood lighting, highlighting artworks in new ways.
      </div>
      <div class="small-title"></div>
    </div>

    <div class="mySlides fade">
      <img class="img-caroussel" src="images/activity.jpg">
      <div class="big-title1">Daily br activities <br> for young and old </div>
      <div class="text"> 
      PoleIT offers a captivating array of daily activities designed to ignite your passion for astronomy, no matter your age! <br>
      For  Young Space Explorers (5-12 yrs): Virtual Reality Tours, Astronomy Cafe, Telescope Viewing Nights
      </div>
      <div class="small-title"></div>
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

    $article = "SELECT * FROM article ORDER BY id DESC LIMIT 4";
    $result = $connect->query($article);

    if ($result->num_rows > 0): ?>
      <section class="card-list">
        <h2 class="latest_article">Latest Articles</h2>
        <br>
        <div class="card-container">
          <?php while($row = $result->fetch_assoc()): ?>
            <div class="card-item">
              <img src="admin/Action/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
              <div class="card-content">
                <h3><?php echo $row['title']; ?></h3>
                <br>
                <p class="description"><?php echo $row['description']; ?></p>
                <a href="viewarticle.php?id=<?php echo $row['id']; ?>" class="read-more1">Read More</a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </section>
    <?php else: ?>
      <p>No item.</p>
    <?php endif; 
    $connect->close();
  ?>

  <br>
  <hr class="line">
  <br>
  <div class="container-article">
    <div class="bloc-article">
      <div class="bloc-image">
        <img src="images/planetarium.jpg" alt="Image 1">
      </div>
      <div class="bloc-text">
        <h2>PLANERARIUM</h2>
        <h3>Bienvenue au Planétarium !</h3>
        <p>
          Voyagez à travers les mystères célestes dans notre fascinant Planétarium, où l'univers se dévoile devant vos 
          yeux. Que vous soyez un passionné d'astronomie chevronné ou un curieux explorateur de l'espace, notre expérience 
          immersive vous transporte au-delà des frontières de notre planète pour découvrir les merveilles de l'univers.
          Notre Planétarium offre une expérience captivante grâce à une technologie de pointe qui projette des images 
          spectaculaires sur un dôme à 360 degrés, créant ainsi une simulation réaliste du ciel étoilé. Laissez-vous 
          emporter par les constellations, les planètes, les galaxies et les phénomènes célestes, tout en apprenant des 
          faits fascinants sur l'astronomie et l'espace.
          Que vous souhaitiez explorer les étoiles avec vos enfants, organiser une sortie éducative pour une classe, ou 
          simplement vous émerveiller devant la beauté de l'univers, notre Planétarium offre une expérience inoubliable 
          pour tous les âges.
          Préparez-vous à lever les yeux vers le firmament et à être ébloui par la splendeur infinie de l'espace au 
          Planétarium. Nous sommes impatients de vous accueillir pour une aventure céleste hors du commun !
        </p>
      </div>
    </div>
    <br>
    <div class="bloc-article">
      <div class="bloc-text">
        <h2>OBSERVATOIRE</h2>
        <h3>Bienvenue à l'Observatoire !</h3>
        <p>
          Plongez dans l'univers infini de la science et de la découverte au cœur de notre Observatoire. Niché au sommet d'une 
          colline, loin des lumières de la ville, notre observatoire offre un environnement idéal pour explorer les mystères du cosmos.
          Que vous soyez un amateur d'astronomie passionné ou simplement curieux de lever les yeux vers les étoiles, notre Observatoire 
          vous offre une expérience unique et enrichissante. Équipé des dernières technologies télescopiques, notre observatoire vous 
          permet d'observer de près les planètes, les étoiles, les nébuleuses et bien plus encore.
          Nos experts astronomes sont là pour vous guider à travers le ciel nocturne, vous aidant à repérer les constellations, à 
          comprendre les mouvements des planètes et à apprécier la beauté des objets célestes. Que ce soit lors de nos soirées 
          d'observation publiques, de nos ateliers éducatifs ou de nos événements spéciaux, vous êtes sûr de vivre des moments inoubliables 
          sous les étoiles.
          Rejoignez-nous à l'Observatoire pour une expérience d'observation astronomique qui élargira votre perspective et nourrira votre 
          fascination pour l'univers. Nous avons hâte de partager avec vous les merveilles du cosmos et de vous inspirer à explorer toujours 
          plus loin les mystères du ciel nocturne.
        </p>
      </div>
      <div class="bloc-image">
        <img src="images/observatory.jpg" alt="Image 2">
      </div>
    </div>
    <div class="hr-article"></div>
  </div>
  <br>
  <hr class="line">
  <br>
  <h2 class="title-gallery">Our Gallery</h2>
  <div class="gallery">        
    <div class="gallery-item">
      <img src="images/galerie/1.jpg">
    </div>
    <div class="gallery-item">
      <img src="images/galerie/2.jpg">
    </div>
    <div class="gallery-item">
      <img src="images/galerie/8.jpg">
    </div>
    <div class="gallery-item">
      <img src="images/galerie/7.jpg">
    </div>
    <div class="gallery-item">
      <img src="images/galerie/6.jpg">
    </div>
  </div>
  <br>
  <hr class="line">
  <br>
  <?php include 'include/footer.php'; ?>
  <script src="js/script.js"></script>
</body>
</html>
