<?php
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--to make the website responsive-->
  <title>Living Leaves</title>
  <!--Connect CSS Style-->
  <link rel="stylesheet" href="style.css">
  <!--For GoogleFont-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <!--for Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
</head>

<body>
  <div id="slideoutMenu"> <!--Slideout Menu (Phone Navigation)-->
    <ul>
      <li> <!--Sign in-->
        <div class="signIn">
            <i class="fas fa-user"> </i> <!--Sign in Icon-->
          <a> <?php echo ($_SESSION["urnamr"]); ?> </a>
        </div>
      </li>
      <li>
        <a href="indoorPlants.php"> Indoor Plants </a>
      </li>
      <li>
        <a href="outdoorPlants.php"> Outdoor Plants </a>
      </li>
      <li>
        <a href="#Blog"> Blog </a>
      </li>
      <li>
        <a href="#C"> Contact us </a>
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
        <a href="outdoorPlants.php"> Outdoor Plants </a>
      </li>
      <li>
        <a href="#Blog"> Blog </a>
      </li>
      <li id="contactUs" >
        <a href="#C"> Contact us </a>
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

  <div id="banner"> <!-- العبارة الترحيبية -->
    <header class="header">
    <h1> Living Leaves! </h1>
    <h3> your helpful note to take care of your indoor, outdoor plants and your green friends at home, to grow up together. <h3>
    </header>
  </div>

  <main>

    <!--Blog-->
  <section id="Blog">

      <div class="post-slider">
        <p class="slider-title"> Blog </p>
        <div class="post-wrapper">

          <div class="post">
            <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/1296x728_Air-Purifying_Plants-2-Dracaena.jpg?w=1155&h=1528"
             alt=""class="slider-image">
            <div class="post-info">
               <br>
               <h3>Best Air Purifying</h3>
               <p class="paragraph"> Some scientists have suggested that choosing the right air purifying plants for...</p>
               <br>
               <a class="readmore" href="Post4-BestAriPurifying.php">Read more</a>
             </div>
           </div>

           <div class="post">
             <img src="https://i.pinimg.com/236x/10/bd/21/10bd2122a0987408181f8e47d966632f.jpg"
              alt=""class="slider-image">
              <div class="post-info">
               <br>
               <h3>Medicinal plants</h3>
               <p class="paragraph">Medicinal plants, also called medicinal herbs, have been discovered and used in ...</p>
               <br>
               <a class="readmore" href="Post2-Medicinals .php">Read more</a>
              </div>
            </div>

            <div class="post">
              <img src="  https://cdn.broadsheet.com.au/melbourne/images/2019/10/24/101234-3859-by%20Aidan%20Rolls%20for%20Leaf%20Supply%20(1).jpg"
               alt=""class="slider-image">
              <div class="post-info">
                <br>
                <h3> Indoor Jungle</h3>
                <p class="paragraph">We’ve condensed expert advice from dozens of books and blog posts into 11 bitesize...</p>
                <br>
                <a class="readmore" href="Post3-IndoorJungle .php">Read more</a>
              </div>
            </div>


            <div class="post">
              <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXxSzRCnZfzPYs2sKLwaE9jqJFQx5fL76URA&usqp=CAU"
              alt=""class="slider-image">
              <div class="post-info">
                <br>
                <h3>Houseplant Parenting</h3>
                <p class="paragraph"> We’ve condensed expert advice from dozens of books and blog posts into 11 bitesize...</p>
                <br>
                <a class="readmore" href="Post1-Houseplant Parenting Course!.php">Read more</a>
              </div>
            </div>

          </div>
        </div>

    </section>

    <!--Contact Us-->
    <section id="C">
      <div class="container">
        <p>CONTACT US</p>
        <div class="login">
          <input type="text" placeholder="First Name" class="input">
          <input type="text" placeholder="Last Name" class="input">
        </div>
        <div class=" Email">
          <input type="text" placeholder="Your Email Address"  class="input">
        </div>
        <div class="msg">
          <textarea  class="area" placeholder=" Message"></textarea>
        </div>
        <div class="btn">Send Message</div>
      </div>
     </section>

  </main>

  <!-- Footer -->
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

  <!--Connect JavaScript file-->
  <script src="mainJS.js"> </script>
</body>

</html>
