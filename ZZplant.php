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
  <title>ZZ Plant</title>
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

    <div class="banner3">
      <div class="title2">
        <h1>ZZ Plant</h1>
      </div>
    </div>

    <section class="tobic">
      <div class="tobicContent">

        <!-- صورة حلوة وجودتها زينه للنبته -->
        <img src="https://cdn.shopify.com/s/files/1/0584/6065/products/ZZplant_720x.jpg?v=1598090748" alt=" ZZ Plant">

        <!-- content -->
        <p> ZZ plants, Zamioculcas zamiifolia, are beautiful, unique, almost impossible to kill Succulent
           Plants that burst onto the market several years ago. They have become an immediate hit. ZZ plants
            have long stems covered in hundreds of plump, shiny green leaves (or leaflets as they are called).
             </p>
        <p>  These plants, native to Eastern Africa, are very drought resistant thanks to their rhizomatous roots
           that store water. ZZ plants may be one of the hardiest and most forgiving indoor plants I can recommend.
       </p>

        <!-- Icons -->
        <div class="plantIcons">
          <pre>
          </pre>

          <!-- Part1 -->
          <h4> <i style="color: #FFBD2E; font-size: 25px" class="fas fa-sun"></i> Light </h4>
          <p > ZZ plants can survive in low light, but grow faster in bright, indirect light.
             Since a ZZ plant is a slow grower even in good light, in low light these plants rarely
              produces new leaves. Direct sun may fade and burn the leaves. Stems droop over when there
              is not enough light and grow straight up when light is coming from above.</p>
          <pre>
          </pre>

          <!-- Part2 -->
          <h4> <i style="color: #1167b1; font-size: 25px" class="fas fa-tint"></i> Water </h4>
          <p> Over-watering is the main way to kill a ZZ plant. They do not like wet feet, so allow
             the soil to dry out before watering. ZZ plants have thick roots called rhizomes that store
              water, so when in doubt, do not water. Unlike most plants, Zamioculcas are very forgiving,
              allowing you to over-water a few times before showing signs of serious damage.
        </p>
          <pre>
          </pre>

          <!-- Part3 -->
          <h4> <i style="color: #6B8E23; font-size: 25px" class="fas fa-spray-can"></i> Humidity </h4>
          <p> ZZ plants do well in basic household humidity.</p>
          <pre>
          </pre>

        </div>
        <!-- End of Icons -->

        <!-- content -->

        <!-- Sources المصادر -->
         <div>
           <p style="display: inline-block;" > Source: </p>
           <a  style="display: inline-block; text-decoration: underline;"  href="https://www.houseplant411.com/">House Plant</a>
         </div>
        </div>

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
