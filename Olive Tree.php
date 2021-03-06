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
  <title>Olive Tree</title>
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
        <h1>Olive Tree</h1>
      </div>
    </div>

    <section class="tobic">
      <div class="tobicContent">

        <!-- patchplants.com صورة حلوة وجودتها زينه للنبته  من موقع -->
        <img src="https://i.pinimg.com/originals/6f/81/64/6f81649ec2687014bada6f58984eb970.jpg" alt="Plant pic">

        <!-- content -->
        <p> The scientific name of olive is Olea europaea. It is an evergreen, perennial tree that grows in the subtropics.
          Its fruits and oil are a staple of the diet of people living in the Mediterranean regions.</p>
        <p> The plant has the ability to grow from the root stem when the original plant dies.
           The olive tree does not start production until from the age of 4 to 8 years,
           and full production is at the age of 15 to 20 years. </p>

        <!-- Icons -->
        <div class="plantIcons">
          <pre>
          </pre>

          <!-- Part1 -->
          <h4> <i style="color: #FFBD2E; font-size: 25px" class="fas fa-sun"></i> Light </h4>
          <p > It needs direct sun, but if it has bright lighting, it can live indoors. </p>
          <pre>
          </pre>

          <!-- Part2 -->
          <h4> <i style="color: #1167b1; font-size: 25px" class="fas fa-tint"></i> Water </h4>
          <p> It is irrigated when the soil surface is completely dry to a depth of 3 cm. </p>
          <pre>
          </pre>

          <!-- Part3 -->
          <h4> <i style="color: #6B8E23; font-size: 25px" class="fas fa-spray-can"></i> Humidity </h4>
          <p> Love moisture, and it is preferable to moisten it by spraying its leaves with water by means of a spray spray. </p>
          <pre>
          </pre>

        </div>
        <!-- End of Icons -->

        <!-- content -->
        <p> This tree has been known and glorified for thousands of years.
          It was planted in Crete and its fruits were eaten in the year 3500 BC.
           And cultivated by the Semitic peoples since 3000 BC.
            The tree grows to a height of 3 to 12 meters or more.
          What distinguishes it is that it has dark green leaves on the top and gray from the bottom,
           which gives a contrast in color that increases its beauty.</p>

        <!-- Sources المصادر -->
         <div>
           <p style="display: inline-block;" > Source: </p>
           <a  style="display: inline-block; text-decoration: underline;"  href="https://www.nabataty.com/plants/%d8%b4%d8%ac%d8%b1%d8%a9-%d8%a7%d9%84%d8%b2%d9%8a%d8%aa%d9%88%d9%86/

"> nabataty </a>
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
