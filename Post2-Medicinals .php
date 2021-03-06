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
      <h1> 9 Medicinal Plants to Keep in Your Home </h1>
      <div class="tobicContent">
        <pre>
        </pre>
        <p>Medicinal plants are useful to keep on hand to treat common ailments. You can reach for certain medical plants to relieve headaches, tummy trouble and even irritation from bug bites. Plants can be consumed in teas, used as garnish, applied topically as essential oil or consumed as a pill.

It’s important to remember that you should always double check with your doctor before consuming or using anything new for your body. If you choose to grow some of these plants, remember to take proper care according to the plant’s care guidelines and refrain from using any pesticides or other harmful chemicals on your plants. You don’t want any of those chemicals in or on your body!

To help you decide what plants are best for you, we rounded up our top medicinal plants, their notable health benefits and how to use them.</p> <pre>
</pre>

         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-01-basil.jpg" alt="basil">
         <br>
        <p>
            Is a common herb used to garnish salads, pasta and many other meals to add delicious flavor. Thanks to the vitamins and minerals in basil, such as vitamin K and iron, this herb is helpful for combating common ailments. For example, the manganese in basil helps metabolize different compounds in your body. Holy basil, commonly referred to as tulsi, is a specific species of basil that originates from India. It’s considered a sacred plant that is used in teas, ointments and more, to help treat a variety of ailments like fevers and diabetes. This species has a much stronger taste than common basil!
        </p>
         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-02-catnip.jpg" alt="Catnip">
         <br>
        <p>
          Is a fun plant for cats. Most cats are attracted to the plant and will roll around near it since its aroma acts as a stimulant. These medicinal plants also act as a sedative for cats if consumed. For humans, on the other hand, it is normally used as a stress reliever, sleep aid and a solution for skin issues. The majority of its health benefits come from the presence of nepetalactone, thymol and other compounds that make this plant great for you and your furry friend.
        </p>
         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-03-cayannepepper.jpg" alt="Cayenne Pepper">
        <br>
        <p>
          Adds a spicy kick to any meal or drink and is a popular detoxifier for many people. Capsaicin is the compound responsible for cayenne’s spicy nature, but it’s also responsible for some of its health benefits. Some of these benefits include pain relief and lower cholesterol.
        </p>
         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-04-chamomile.jpg" alt="Chamomile">
         <br>
        <p>
          Has a high concentration of antioxidants that make it a great plant for relieving a variety of ailments. Chamomile is commonly consumed as a tea and you can make your own at home by brewing dried chamomile flowers (just make sure the flowers are completely dry). Drinking a cup of chamomile tea before bed can help you relax and have a more restful night’s sleep.
        </p>
         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-05-dandelion.jpg" alt="Dandelion">
        <br>
        <p>
          You should think twice before removing those pesky dandelions (taraxacum) from your front yard! Dandelions are not only edible, but they are also full of health benefits. These medicinal plants are packed with things that are great for you: vitamin K, vitamin C, iron, calcium and more. These vitamins and minerals help support strong bone and liver health. All parts of a dandelion are useful and good for you. For example, dandelion roots are commonly used for teas, the leaves are used as garnishes for different dishes and dandelion sap is great for your skin!
        </p>
         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-06-echinacea.jpg" alt="Echinacea">
         <br>
        <p>
          Is also commonly known as purple coneflower. This is another flower that is normally used in tea to help soothe different symptoms and to strengthen the immune system. This popular herb is used most often to accelerate recovery from the common cold. It’s important to note that echinacea can cause negative effects like nausea and dizziness if taken consistently in large doses.
        </p>
         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-08-lavender.jpg" alt="Lavender">
          <br>
        <p>
           Is popular for its soothing scent and ability to calm the nerves. Lavender tea is another drink you can whip up to help you unwind after a long day and have a good night’s rest. Lavender oil is also popular for massage treatments, aromatherapy and even hair treatment!
        </p>
         <br>
        <img src="https://www.proflowers.com/blog/wp-content/uploads/2018/07/medicinal-plants-09-lemon-balm.jpg" alt="Lemon Balm">
         <br>
        <p>
          Is a longstanding medicinal plant used to help relieve stress and ward off insects! An intense amount of stress can cause complications for many functions of the body, so minimal stress is ideal for a healthy functioning body. This lemony plant is delicious and easily used in several dishes like teas, ice cream and more. Many people consume lemon balm tea to help relieve anxiety, stress and even to calm restless kids.
        </p><pre>
        </pre>
         <p style="display: inline-block;"  > Source:</p>
         <a  style="display: inline-block; text-decoration: underline;"  href="https://www.proflowers.com/blog/medicinal-plants"> Pro Flowers  </a>

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
