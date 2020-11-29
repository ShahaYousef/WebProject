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
  <title>Blog</title>
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
        <a href="indoorPlants.php"> Indoor Plants </a>
      </li>
      <li>
        <a href="outdoorPlants.php"> Outdoor Plants </a>
      </li>
      <li>
        <a class="active" href="HomePage.php#Blog"> Blog </a>
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
        <a href="outdoorPlants.php"> Outdoor Plants </a>
      </li>
      <li>
        <a class="active" href="HomePage.php#Blog"> Blog </a>
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
        <h1>BLOG</h1>
      </div>
    </div>

    <section class="tobic">
      <h1> How to Create Your Own Indoor Jungle at Home </h1>
      <div class="tobicContent">
        <pre>
        </pre>
        <h3>In their second book, Lauren Camilleri and Sophia
           Kaplan of Sydney’s Leaf Supply offer tips on creating a lush indoor garden – and keeping it alive.</h3>
           <img src="https://images-na.ssl-images-amazon.com/images/I/710nhgGtdfL.jpg" alt="indoor jungle">
           <p>“Schooling up and laying the correct groundwork for your indoor jungle is the best way to create a sustainable and ultimately rewarding plant-filled space,” write Lauren Camilleri and Sophia Kaplan, owners of Sydney plant-delivery company Leaf Supply. “Knowing exactly what plants need to survive, as well as what conditions
             they will receive in your interior, will allow you to make informed decisions about the style of jungle that is best suited to you..</p>
             <p>Here are some extracts from their second book, Indoor Jungle, to help get you started.</p>
             <pre>
             </pre>
        <h4>Analysing your space</h4>
        <pre>
        </pre>
        <p>When it comes to creating an indoor jungle, well before you hit the nurseries and plant shops,
          it’s really important to understand the space you’re dealing with. To give plants the best chance
           to survive you need to be realistic about the conditions you’re able to provide.
           When bringing plants into our spaces, we’re looking to mimic as closely as possible the
           conditions they receive in their natural environment. At the top of the list of considerations is
            the level and type of light on offer, but that’s closely followed by water and soil as well as temperature, humidity and fertiliser.</p>
  <p>Spend time throughout your day watching the sun as it moves across the sky and peeks
     through different windows. Where does the light reach? Do certain rooms get extra hot
     in the afternoon sun? Do these patterns change in the cooler months? Do you have air conditioning or heaters?
     Or a strong draught down particular corridors? Keep all of this in mind when you’re considering where to place your plants.</p>
     <p>From here you can look more closely at which areas you’d like to fill. Is there an empty corner that could be brought to life? A shelf or
        bookcase that could benefit from trailing plants? A windowsill that’s screaming out for some plant love?</p>
        <pre>
        </pre>
        <h4>Finding inspiration</h4>
        <p>There’s no shortage of places to find green inspiration when searching for ideas to create your own indoor jungle.
           We’re stickybeaks from way back and love nothing more than peeking inside the spaces of amazingly creative plant
           people to swoon over how they’ve incorporated plants into their stylish spaces. Chatting to the people who inhabit
            these lush interiors about how they’ve built their jungles, where they get their love of plants, and – most importantly – why
            they love living surrounded by them provides invaluable insight</p>

            <pre>
            </pre>
        <h4>Light</h4>
        <p>This is without a doubt the most important place to start when it comes to talking about plant health,
          because above all else plants need light to survive. It is integral to the process of photosynthesis,
           in which plants create their own fuel by using light energy to convert carbon dioxide and water into glucose and oxygen.</p>
           <p>A sunny windowsill will provide the most intense light and will be best suited
              to sun-worshipping cacti and succulents. Direct sun coming in through a window will
               generally be too intense for some indoor foliage, and so placement close to but not
               directly exposed to the rays is best. The further you get from a light source,
               the lower the quality and quantity the light gets. Plants sitting on the opposite side
               of the room to the light source with no direct view to the sky will generally be experiencing
                what we would consider low-light conditions.</p>
                <pre>
                </pre>
           <p>Light will differ throughout the course of a day and as the seasons change. In winter and autumn,
              the sun sits lower in the sky and plants that were receiving adequate light in summer and spring can start to suffer.
               Be sure to stay on top of this changing light situation and adjust the position of plants throughout the year.
             You may need to shift certain plants closer to light sources or sit them higher up on furniture
              or plant stands during the cooler, darker months.</p>
              <pre>
              </pre>
           <h4>Water</h4>
           <p>The absolute best way to test the moisture level of your plants is to simply dip your finger
              a few inches into the soil and feel how much has dried out. Do this every few days until you begin
               to understand its needs. Most (not all) tropical indoor plants like the first couple of centimetres
                of soil to have dried out before watering again. Always check the specific water requirements your
                 plant needs, and then be sure to adjust them according to the seasons (less in winter when the soil
                 is likely to dry out less quickly and plants tend to go through more dormant growing periods).</p>
           <p>If you’re not feeling super confident about your moisture-sensing abilities, or have plants in awkward-to-reach places,
              a water meter will be your friend. Simply insert the prong into the soil and it will give you
              a clear reading of moisture levels, which you can then use to decide whether your plant is thirsty or not.</p>
              <pre>
              </pre>
              <p>Indoor Jungle provides more details about soil, temperature, humidity and fertiliser, and ways to find your own plant style. We go room-by-room to see how plants can feature throughout the home and workspace in the most
                effective and practical ways, and profile 14 incredible plant-filled spaces from around the globe for endless plant inspiration.</p>
                <pre>
                </pre>
         <p style="display: inline-block;" >
         <a  style="display: inline-block; text-decoration: underline;"  href="https://www.leaf-supply.com/products/indoor-jungle-book"> Indoor Jungle </a>
         by Lauren Camilleri and Sophia Kaplan is Published by Smith Street Books </p>
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
