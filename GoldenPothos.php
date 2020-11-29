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
  <title>Golden Pothos</title>
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
        <h1>Golden Pothos</h1>
      </div>
    </div>

    <section class="tobic">
      <div class="tobicContent">

        <!-- صورة حلوة وجودتها زينه للنبته -->
        <img src=" https://cdn.shopify.com/s/files/1/0150/6262/products/the-sill_golden-pothos_variant_small_grant_blush_1440x.jpg?v=1603921847" alt="Golden Pothos">

        <!-- content -->
        <p>  is a popular plant in the hardy pothos family. All members of this group have glossy, heart-shaped,
          leathery leaves but in different colors. The golden pothos is yellow and green, the jade pothos is solid
           green, and the marble queen pothos is green and white. The marble queen pothos, with its long cascading
           vines makes a beautiful table or hanging plant. </p>
        <p>This plant, sometimes referred to as devil’s ivy, can be trained to grow on a pole or trellis.  All
          pothos plants are efficient in cleaning the air of harmful chemicals.
       </p>

        <!-- Icons -->
        <div class="plantIcons">
          <pre>
          </pre>

          <!-- Part1 -->
          <h4> <i style="color: #FFBD2E; font-size: 25px" class="fas fa-sun"></i> Light </h4>
          <p >A marble queen pothos survives in low light but looks better and grows faster in
            medium to bright indirect light. When the light is too low, the white swirls on the
            leaves revert to green on the new growth.</p>
          <pre>
          </pre>

          <!-- Part2 -->
          <h4> <i style="color: #1167b1; font-size: 25px" class="fas fa-tint"></i> Water </h4>
          <p>Marble queen pothos like their soil to be kept on the dry side. During the spring and summer,
             water well and then allow the top 50% of the soil to dry out before watering again. During
             the fall and winter, let the soil get almost totally dry before watering. If in doubt, wait
             for the leaves to become soft and droop a little before you water.
        </p>
          <pre>
          </pre>

          <!-- Part3 -->
          <h4> <i style="color: #6B8E23; font-size: 25px" class="fas fa-spray-can"></i> Humidity </h4>
          <p> Marble Queen pothos grow well in basic household humidity.</p>
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
