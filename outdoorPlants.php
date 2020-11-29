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
  <title>Outdoor Plant</title>
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
        <h1>OUTDOOR PLANTS</h1>
      </div>
    </div>

    <section class="plantsGallery">

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Hydrangea.php">
          <img src="WebProject/Hydrangea.jpg" onmouseover="this.src='WebProject/Hydrangea hover.jpg';"
          onmouseout="this.src='WebProject/Hydrangea.jpg';" alt="Hydrangea" width="600" height="400">
        </a>
        <div class="desc"> Hydrangea <p> Hydrangea </p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="English IVY.php">
          <img src="WebProject/IVY.jpg" onmouseover="this.src='WebProject/IVY hover.jpg';"
          onmouseout="this.src='WebProject/IVY.jpg';" alt="IVY" width="600" height="400">
        </a>
        <div class="desc"> English IVY <p>Hedera Helix</p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Effy.php">
          <img src="WebProject/Effy.jpg" onmouseover="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1508426189/products/hedera-helix-379.jpg';"
          onmouseout="this.src='WebProject/Effy.jpg';" alt="Effy" width="600" height="400">
        </a>
        <div class="desc"> Effy <p>Hedera Helix (Gold Child) </p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Bay Tree.php">
          <img src="WebProject/Bay Tree.jpg" onmouseover="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1593706862/gzmikefzjcszwa8wgg4y.jpg';"
          onmouseout="this.src='WebProject/Bay Tree.jpg';" alt="Bay Tree" width="600" height="400">
        </a>
        <div class="desc"> Bay Tree <p>Laurus Nobilis</p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Fatsi.php">
          <img src="https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1553016888/products/fatsia-japonica-2838ac.jpg" onmouseover="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1553016677/products/fatsia-japonica-2764c4.jpg';"
          onmouseout="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1553016888/products/fatsia-japonica-2838ac.jpg';" alt="Fatsi" width="600" height="400">
        </a>
        <div class="desc"> Fatsi <p>Fatsia Japonica</p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="ViVi.php">
          <img src="https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1552930593/products/lemon-tree-d72b5c.jpg" onmouseover="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1552930683/products/lemon-tree-d77ad4.jpg';"
          onmouseout="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1552930593/products/lemon-tree-d72b5c.jpg';" alt="ViVi" width="600" height="400">
        </a>
        <div class="desc"> ViVi <p>Lemon Tree</p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Mae.php">
          <img src="https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1591270091/u9xj2mwgsizrzhbc8iui.jpg" onmouseover="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_jpg,h_840,q_auto:good,w_840/v1586345224/dv7beeecasykdu0vfqs3.jpg';"
          onmouseout="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1591270091/u9xj2mwgsizrzhbc8iui.jpg';" alt="Mae" width="600" height="400">
        </a>
        <div class="desc"> Mae <p>Sansevieria Trifasciata</p></div>
      </div>
    </div>


    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Phoebe.php">
          <img src="https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1591269126/mmme5j1k1m0k8ipggrhb.jpg" onmouseover="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1553021171/products/canary-island-date-palm-38f290.jpg';"
          onmouseout="this.src='https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1591269126/mmme5j1k1m0k8ipggrhb.jpg';" alt="Phoebe" width="600" height="400">
        </a>
        <div class="desc">Phoebe <p>Canary Island Date Palm</p></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Tillandsia.php">
          <img src="https://img.crocdn.co.uk/images/products2/pl/20/00/03/20/pl2000032098_card3_lg.jpg" onmouseover="this.src='WebProject/Tillandsia hover.jpg';"
          onmouseout="this.src='https://img.crocdn.co.uk/images/products2/pl/20/00/03/20/pl2000032098_card3_lg.jpg';"  alt="Tillandsia" width="600" height="400">
        </a>
        <div class="desc"> Tillandsia <p> Tillandsia Fasciculata</p> </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="Olive Tree.php">
          <img src="https://www.flowerpower.com.au/media/catalog/product/image/29631753ee/fp-collection-artificial-potted-olive-tree.jpg" onmouseover="this.src='WebProject/Olive Tree hover.jpg';"
          onmouseout="this.src='https://www.flowerpower.com.au/media/catalog/product/image/29631753ee/fp-collection-artificial-potted-olive-tree.jpg';" alt="Olive Tree" width="600" height="400">
        </a>
        <div class="desc"> Olive Tree <p> Potted Olive Tree</p></div>
      </div>
    </div>

    <div class="clearfix"></div>

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
