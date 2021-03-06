<?php
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--to make the website responsive-->
  <mata http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Connect CSS Style-->
  <link rel="stylesheet" href="style.css">
  <!--For GoogleFont-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <!--for Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
  <title>Indoor Plants</title>
</head>

<body>
  <div id="slideoutMenu"> <!--Slideout Menu (Phone Navigation)-->
    <ul>
      <li> <!--Sign in-->
        <div id="signIn">
            <i class="fas fa-user"> </i> <!--Sign in Icon-->
          <a> <?php echo ($_SESSION["urnamr"]); ?> </a>
        </div>
      </li>
      <li>
        <a href="indoorPlants.php" class="active" > Indoor Plants </a>
      </li>
      <li>
        <a href="outdoorPlants.php"> Outdoor Plants </a>
      </li>
      <li>
        <a href="HomePage.php#Blog"> Blog </a>
      </li>
      <li>
        <a href="HomePage.php#C"> Contact us </a>
      </li>
      <li> <!--Search-->
        <input type="text" placeholder="Search Here " name="Search" class="searchInput">
      </li>
    </ul>
  </div>

  <nav>
    <div id=logoImg> <!--logo-->
      <a href="HomePage.php"> <!--home page link-->
        <img src="WebProject/singleLogo.jpeg" alt="LivingLeaves Logo">
      </a>
    </div>
    <div id="menuIcon"> <!--Menu Icon-->
      <i class="fas fa-bars"></i>
    </div>
    <ul> <!--Navigation Menu-->
      <li>
        <a href="indoorPlants.php" class="active" > Indoor Plants </a>
      </li>
      <li>
        <a href="outdoorPlants.php"> Outdoor Plants </a>
      </li>
      <li>
        <a href="HomePage.php#Blog"> Blog </a>
      </li>
      <li id="contactUs" >
        <a href="HomePage.php#C"> Contact us </a>
      </li>
      <li> <!--Sign in-->
        <div id="signIn">
            <i class="fas fa-user"> </i> <!--Sign in Icon-->
          <a> <?php echo ($_SESSION["urnamr"]); ?> </a>
        </div>
      </li>
      <li> <!--Search, just the icon-->
        <div id="searchIcon">
          <i class="fas fa-search"> </i> <!--Search Icon-->
        </div>
      </li>
    </ul>
  </nav>

  <div id="searchBox"> <!--Search Box-->
    <input type="text" placeholder="Search Here" class="searchInput">
  </div>

  <main>

    <div class="banner2">
      <div class="title">
        <h1>INDOOR PLANTS</h1>
      </div>
    </div>

    <section class="plantsGallery">

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="AloeVera.php">
          <img src="https://i.pinimg.com/564x/59/40/d2/5940d29b0208710329352f8e79928bae.jpg" onmouseover="this.src='https://i.pinimg.com/564x/71/d6/82/71d682e0a78c51eee56e3f5d0682a2c5.jpg';"
          onmouseout="this.src='https://i.pinimg.com/564x/59/40/d2/5940d29b0208710329352f8e79928bae.jpg';" alt="Aloe Vera" width="600" height="400">
        </a>
        <div class="desc"> Aloe Vera <p>Succulent Plant</p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="ArecaPalm.php">
          <img src="https://i.pinimg.com/564x/96/40/7a/96407afa6b20325b153fdcb2e2f6451b.jpg" onmouseover="this.src='https://i.pinimg.com/564x/f2/ee/4f/f2ee4facb05f36f492e782c13e701b91.jpg';"
          onmouseout="this.src='https://i.pinimg.com/564x/96/40/7a/96407afa6b20325b153fdcb2e2f6451b.jpg';" alt="Areca palm" width="600" height="400">
        </a>
        <div class="desc"> Areca Palm <p>Dypsis Lutescens</p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="BabyTears.php">
          <img src="https://i.pinimg.com/564x/ee/13/88/ee138874a0c30b05d0d8001273efb996.jpg" onmouseover="this.src='https://i.pinimg.com/564x/02/f0/b8/02f0b8fe7a05aa9e4efe27c14c8e480e.jpg';"
          onmouseout="this.src='https://i.pinimg.com/564x/ee/13/88/ee138874a0c30b05d0d8001273efb996.jpg';" alt="Baby Tears" width="600" height="400">
        </a>
        <div class="desc"> Baby Tears Plant <p>Soleirolia Soleirolii</p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="GoldenMosaic.php">
          <img src="https://i.pinimg.com/564x/d2/10/47/d21047eb4733f2f4e96b7b42ad3a0196.jpg" onmouseover="this.src='WebProject/Baby Tears Plant.jpg';"
          onmouseout="this.src='https://i.pinimg.com/564x/d2/10/47/d21047eb4733f2f4e96b7b42ad3a0196.jpg';"  alt="Gtenanthe Plant" width="600" height="400">
        </a>
        <div class="desc"> Golden Mosaic Plant <p> Gtenanthe Plant </p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="DracaenaReflexa.php">
          <img src="WebProject/Dracaena Reflexa.jpg" onmouseover="this.src='WebProject/Dracaena Reflexa hover.jpg';"
          onmouseout="this.src='WebProject/Dracaena Reflexa.jpg';" alt="Dracaena Reflexa" width="600" height="400">
        </a>
        <div class="desc"> Dracaena Reflexa <p>Song of India</p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="SnakePlant.php">
          <img src="https://i.pinimg.com/564x/2a/85/71/2a8571f99ad60f5a8b1ef8cdbad79b25.jpg" onmouseover="this.src='https://i.pinimg.com/564x/68/ec/d7/68ecd7fd1bdf9d2ea6ae4aa95f1654e9.jpg';"
          onmouseout="this.src='https://i.pinimg.com/564x/2a/85/71/2a8571f99ad60f5a8b1ef8cdbad79b25.jpg';" alt="Snake Plant" width="600" height="400">
        </a>
        <div class="desc"> Snake Plant <p>Sansevieria Trifasciata</p></div>
      </div>
    </div>


    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="GoldenPothos.php">
          <img src="WebProject/pothos plant.jpg" onmouseover="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1564152524/products/devils-ivy-12cb95.jpg';"
          onmouseout="this.src='WebProject/pothos plant.jpg';" alt="Pothos Plant" width="600" height="400">
        </a>
        <div class="desc"> Golden Pothos <p>Epipremnum Aureum</p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="ZZplant.php">
          <img src="https://i.pinimg.com/564x/f6/d0/1a/f6d01a179711f44c963bedc29ce66b0d.jpg" onmouseover="this.src='WebProject/ZZ Plant.jpg';"
          onmouseout="this.src='https://i.pinimg.com/564x/f6/d0/1a/f6d01a179711f44c963bedc29ce66b0d.jpg';" alt="ZZ Plant" width="600" height="400">
        </a>
        <div class="desc"> ZZ Plant <p>Zamioculcas Zamiifolia</p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="CrotonPlant.php">
          <img src="https://i.pinimg.com/564x/ae/f6/b6/aef6b6261162c50dd6c4cca5b0792e99.jpg" onmouseover="this.src='http://mobileimages.lowes.com/product/converted/192665/192665059575_16645238.jpg?size=pdhi.jpg';"
          onmouseout="this.src='https://i.pinimg.com/564x/ae/f6/b6/aef6b6261162c50dd6c4cca5b0792e99.jpg';" alt="Croton Plant" width="600" height="400">
        </a>
        <div class="desc"> Croton Plant <p>Codiaeum variegatum</p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="SwissCheesePlant.php">
          <img src="WebProject/Monstera Deliciosa2.jpg" onmouseover="this.src='WebProject/Monstera Deliciosa hover.jpg';"
          onmouseout="this.src='WebProject/Monstera Deliciosa2.jpg';" alt="Monstera Deliciosa" width="600" height="400">
        </a>
        <div class="desc"> Swiss Cheese Plant <p>Monstera Deliciosa</p></div>
      </div>
    </div>

    <div class="clearfix"></div>

    </section>

  </main>

  <!-- تذييل الصفحة -->
  <footer>
    <p> "I grow plants for many reasons: to please my eye or to please my soul, to challenge the elements or to challenge my patience, for novelty or for nostalgia, but mostly for the joy in seeing them grow" </p>
    <p> – David Hobson </p>
    <div class="socialMediaIcon">
      <i class="fab fa-instagram"></i>
      <i class="fab fa-facebook"></i>
      <i class="fab fa-twitter"></i>
    </div>
    <p id="©"> © 2020 Living Leaves </p>
  </footer>

  <script src="mainJS.js"> </script>
</body>

</html>
