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
  <title>Phoebe</title>
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
        <h1>Phoebe</h1>
      </div>
    </div>

    <section class="tobic">
      <div class="tobicContent">

        <!-- صورة حلوة وجودتها زينه للنبته -->
        <img src="https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1591269285/c2zwtkwwts8xwsmqrc9g.jpg" alt="Plant pic">

        <!-- content -->
      <p>You’ll have already guessed where this plant comes from. This magnificent specimen is the national emblem of the Canary Islands,
			where you’ll find it growing to heights of around 40m. Don’t worry about it growing that tall on your balcony.
			Even in the wild it would take 60 years or more to reach full height.
			</p>
      <p>You’re unlikely to get fruit on a plant grown in the UK, but it’s no great loss as they’re apparently not particularly tasty.
			This is more a plant to enjoy for its large sculptural leaves.
			In the Canary Islands, those leaves are used to make all sorts of things, from baskets, to brooms, to hats.
			</p>
      <p>This is an easy way to give a tropical feel to your outdoor space.
			Give it a spot that gets a mix of sun and shade throughout the day and try to water it whenever the top two inches of soil feel dry. </p>

        <!-- Icons -->
        <div class="plantIcons">
          <pre>
          </pre>

          <!-- Part1 -->
          <h4> <i style="color: #FFBD2E; font-size: 25px" class="fas fa-sun"></i> Light </h4>
          <p > She loves the sun, but she’s happiest if she gets a little bit of shade for part of the day, for a break from the heat. </p>
          <pre>
          </pre>

          <!-- Part2 -->
          <h4> <i style="color: #1167b1; font-size: 25px" class="fas fa-tint"></i> Water </h4>
          <p> She likes her soil moist but not soggy. Give her a drink whenever the top two inches of soil feel dry. </p>
          <pre>
          </pre>


        </div>
        <!-- End of Icons -->

        <!-- content -->

        <!-- Sources المصادر -->
         <div>
           <p style="display: inline-block;" > Source: </p>
           <a  style="display: inline-block; text-decoration: underline;"  href="https://www.patchplants.com/gb/en/plants/canary-island-date-palm-154/"> PATCH PLANTS </a>
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
