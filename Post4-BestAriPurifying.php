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
      <h1> 10 Best Ari purifying plants for the home </h1>
      <div class="tobicContent">
        <pre>
        </pre>
        <p>Carefully selecting and positioning the right house plants can ultimately make your home a healthier place to relax.<pr>
        Some scientists have suggested that choosing the right air purifying plants for your home can<pr>
        help detoxify the air in your living spaces, meaning your houseplants not only look lovely but work a little harder to clean the air you breathe in.<pr>
        NASA's Clean Air Study found that there are a number of air purifying plants that can detoxify your home from the airborne <pr>
        toxins, dusts and germs that can be found in a variety of household products, materials and furniture.<pr>
        To give your home a healthy breath of fresh air, here's our list of the best air purifying plants and where to keep them…</p>
            <pre>
            </pre>
            <h3>1. BARBERTON DAISY</h3>
            <p>As well as injecting a cheerful burst of red, yellow, orange or pink into your home,
              the Barberton daisy is an effective cleanser of the toxins formaldehyde,
              trichloroethylene, and benzene, found in a range of household materials from paints to synthetic fibres.</p><pre>   </pre>
        <h4>Care advice: </h4><p>Place the plant in a room with plenty of natural light and keep the soil moist but well-drained</p>
              <img src="https://hips.hearstapps.com/countryliving.cdnds.net/16/21/1600x1968/gallery-1464186425-daisy.jpg?resize=768:*" alt="Barbeton daisy">
            <pre>
            </pre>
            <h3>2. ENGLISH IVY</h3>
          <p> This easy-growing perennial vine is particularly effective at reducing airborne
            faecal particles which makes it the perfect air purifier for your bathroom or en suite.
             In addition, studies have shown that the ivy can also help combat mould levels in the home.</p><pre>
             </pre>
        <h4>Care advice:</h4><p> Provide your English ivy with generous watering and four hours of direct sunlight a day,
           and it will return the love to you with clean, detoxified air.</p>
        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFAlnMFzn7YjcHIJustOlxoxqvlW98eYS6yg&usqp=CAU" alt="ENGLISH IVY"> -->
        <pre>
        </pre>
        <h3>3. SNAKE PLANT OR MOTHER-IN-LAW'S TONGUE</h3>
        <p>With this plant in your bedroom, you're in for a great night's sleep. Also known as Mother-in-Law's Tongue,
        this yellow-tipped succulent releases oxygen at night, helping you to breathe better while sleeping.
        It is one of the best plants for filtering the air of formaldehyde, xylene, benzene, toluene, and trichloroethylene.</P><pre>
        </pre>
        <h4>Care advice:</h4><p> Be mindful not to overwater, as the roots are prone to rot in moist soil.
        </p><img src="https://hips.hearstapps.com/countryliving.cdnds.net/16/21/3200x3972/gallery-1464186776-snake-plant.jpg?resize=768:*" alt="SNAKE PLANT OR MOTHER-IN-LAW'S TONGUE"><pre>
        </pre>
        <h3>4. CHRYSANTHEMUM</h3>
        <p>Brighten up your kitchen or living room with a chrysanthemum. These pretty blooms help to filter out
        a host of toxins including ammonia and benzene, which is often found in plastics, detergents, and glue.</p><pre>
        </pre>
        <h4>Care advice:</h4><p> This plant loves sunlight, so place it in a spot near a sunbathed window.
        </p><img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/chrysanthemum-1554994078.jpg?crop=1xw:1xh;center,top&resize=768:*" alt="CHRYSANTHEMUM"> <pre>
        </pre>
        <h3>5.SPIDER PLANT</h3>
        <p>For those of you who are houseplant newbies, the resilient spider plant is the perfect choice.
        It will quietly battle toxins including carbon monoxide and xylene, a solvent used in the
        printing and rubber industries. If you have pets, this is one of the few houseplants that is non-toxic to animals.</p><pre>
        </pre>
        <h4>Care advice:</h4><p> You can also repot the tiny 'spiderettes' and grow a whole family of plants
           that will pretty much take care of themselves... and you.
         </p><img src="https://hips.hearstapps.com/countryliving.cdnds.net/16/21/4000x3276/gallery-1464187136-spider-plant.jpg?resize=768:*" alt="SPIDER PLANT"><pre>
         </pre>
        <h3>6. ALOE VERA</h3>
        <p>A healing aloe plant is a lovely addition to your kitchen windowsill, as it loves a sunny spot.
        While being on hand to soothe any kitchen burns, this succulent will be purifying the air of
         formaldehyde and benzene, found in varnishes, floor finishes, and detergents.</p><pre>
         </pre>
        <h4>Care advice:</h4><p> This plant will thrive in a sunny location.
        </p><img src="https://hips.hearstapps.com/countryliving.cdnds.net/16/20/1600x1066/gallery-1463654239-gettyimages-556450113.jpg?resize=768:*" alt="ALOE VERA"><pre>
        </pre>
        <h3>7. BROAD LADY PALM</h3>
        <p>This is one of the few plants that can help reduce levels of ammonia that can be
        found in a range of cleaning products. They are expensive to buy fully-grown so you
         might want to shop around for a smaller one or start from seed.</p><pre>
         </pre>
         <h4>Care advice: </h4><p>Humidity-loving, this plant will be very happy in your bathroom.
         </p> <!--<img src="https://www.palmtreepassion.com/images/lady-palm-compx.jpg" alt="BROAD LADY PALM"> <pre>-->
         </pre>
         <pre>
         </pre>
        <h3>8. RED-EDGED DRACAENA OR DRAGON TREE</h3>
        <p>Trichloroethylene and xylene are amongst the pollutants fought by this spiky,
        slow-growing plant. The leaves have a bright red trim which add a flash of colour to your home.</p><pre>
        </pre>
        <h4>Care advice:</h4><p> This plant has the potential to grow to 8ft, so keep it in a room with high ceilings and reasonable sunlight.
        </p><img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dragon-tree-1554993589.jpg?crop=1xw:1xh;center,top&resize=768:*" alt=" RED-EDGED DRACAENA OR DRAGON TREE"> <pre>
        </pre>
        <h3>9. WEEPING FIG</h3>
        <p>Popular houseplants since the Victorian times, weeping figs can help to tackle levels of formaldehyde, xylene, and toluene.</p><pre>
        </pre>
        <h4>Care advice: </h4><p>They are fairly fussy plants that don't like change.
        Keep your weeping fig in bright, indirect light away from drafts, and it will be a trusty purifier for many years to come.
      </p><img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/weeping-fig-1554993684.jpg?crop=1xw:1xh;center,top&resize=768:*" alt="WEEPING FIG"><pre>
      </pre>
        <h3>10. CHINESE EVERGREEN</h3>
         <p>This tropical plant is proven to be an effective cleanser of formaldehyde and benzene, found in detergents and cosmetics.</p><pre>
         </pre>
        <h4>Care advice:</h4><p> The Chinese evergreen enjoys low-lit and humid conditions,
        so will thrive in your bathroom. If you choose to keep the plant somewhere else,
         remember to mist the leaves occasionally to prevent browning
       </p><img src="https://hips.hearstapps.com/countryliving.cdnds.net/16/21/4000x3982/gallery-1464187538-house-plant.jpg?resize=768:*" alt="CHINESE EVERGREEN">

         <pre>
         </pre>

         <p style="display: inline-block;" > Source: </p>
         <a  style="display: inline-block; text-decoration: underline;"  href="https://www.countryliving.com/uk/wellbeing/a668/houseplants-to-purify-house-air/"> Country living </a>
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
