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
  <title>Tillandsia</title>
</head>

<body>
  <div id="slideoutMenu"> <!--Slideout Menu (Phone Navigation)-->
    <ul>
      <li> <!--Sign in-->
        <div id="signIn" >
            <i class="fas fa-user"> </i> <!--Sign in Icon-->
          <a> <?php echo ($_SESSION["urnamr"]); ?></a>
        </div>
      </li>
      <li>
        <a href="indoorPlants.php"> Indoor Plants </a>
      </li>
      <li>
        <a href="outdoorPlants.php" class="active"> Outdoor Plants </a>
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
        <a href="indoorPlants.php"> Indoor Plants </a>
      </li>
      <li>
        <a href="outdoorPlants.php" class="active"> Outdoor Plants </a>
      </li>
      <li>
        <a href="HomePage.php#Blog"> Blog </a>
      </li>
      <li id="contactUs" >
        <a href="HomePage.php#C"> Contact us </a>
      </li>
      <li> <!--Sign in-->
        <div id="signIn" href="#">
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
        <h1>Tillandsia</h1>
      </div>
    </div>

    <section class="tobic">
      <div class="tobicContent">

        <!--  indiamart.com صورة حلوة وجودتها زينه للنبته  من موقع -->
        <img src="https://5.imimg.com/data5/EE/KS/IR/SELLER-46403204/tillandsia-cyanea-500x500.jpg" alt="Plant pic">

        <!-- content -->
        <p> Tillandsia grow differently than most other house plants, so they can be confusing to the beginner.
          They are really very hardy, and require much less attention than other house plants.
          rovided the atmosphere is not too dry they can survive with water misting and the occasional bath.
          </p>


        <!-- Icons -->
        <div class="plantIcons">
          <pre>
          </pre>

          <!-- Part2 -->
          <h4> <i style="color: #1167b1; font-size: 25px" class="fas fa-tint"></i> Water </h4>
          <p> If you are growing them indoors and the air is dry, you will need (at minimum) to submerge the plant in water for 2-3 hours about every two weeks and he Water you use is important.
            Never use distilled water! Softened Water is a not good either because of the salt content.
            Filtered water, tap water that has sat long enough for the chlorine to dissipate, and bottled water are all fine.
             Pond Water and aquarium water works well as long as they aren't over crowded with fish and/or reptiles. </p>
          <pre>
          </pre>

        </div>
        <!-- End of Icons -->

        <!-- content -->

        <!-- Sources المصادر -->
         <div>
           <p style="display: inline-block;" > Source: </p>
           <a  style="display: inline-block; text-decoration: underline;"  href="https://www.thespruce.com/grow-coleus-plants-indoors-1902746"> thespruce </a>
         </div>
        </div>

    </section>

  </main>

  <!-- تذييل الصفحة -->
  <footer>
        <p> "Gardening adds years to your life and life to your years" </p>
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
