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
      <h1> Houseplant Parenting Course!🕺 </h1>
      <div class="tobicContent">
        <pre>
        </pre>
           <p> We’ve condensed expert advice from dozens of books and blog posts into 11
             bitesize lessons and then tested it all out ourselves. You will learn our tips for
              keeping your first few houseplants alive.🌱 </p>
                <pre>
              </pre>
              <h4>•	Lesson 1:</h4>  <h3>How to pick the right plants for your space.</h3>
        <h4> Match their natural habitat 🌵🌿</h4>
        <p>There are lots of different types of houseplant, and each one has evolved in a different climate.
          To give them a good chance of survival you need to match their natural climate, as closely as possible,
           to the conditions in your home or office. The most important factors to consider are the amount of
           natural sunlight and the amount of water: think bright open desert vs shady rainforest floor.
        </p>
        <pre>
        </pre>
        <h4>•	Lesson 2:</h4>
        <h3>  How much should I water my plant? 🚰‏ </h3>
        <h4>Overwatering is the biggest killer of houseplants 😵</h4>
        <p> Over-watering is much more common and equally as harmful as under-watering, <pr>
          so always make sure that your plant never sits in excess water by:</p>
        <p>1. Let excess water freely run out of your plant's soil through the holes in the bottom
         of its nursery pot (the brown one that it comes in).</p>
      <p>  2. Always check the decorative pot and pour any excess water away.</p>
        <p>3. Don’t be tempted to repot your plant directly into a pot without drainage holes; it usually ends badly! 🛁 <pr>
        When it comes to watering your plants be flexible, and don't be afraid to get your hands dirty. Rather than scheduling <pr>
        in a certain day each week to blindly water your plants, regularly feel down into the soil an inch under the surface.<pr>
         We call this, the Patch finger dip test 👇 </p>
         <pre>
         </pre>
         <img src="https://ci6.googleusercontent.com/proxy/xPkM2GJA7IvAXztY9BxWu_3a5M4D37fZD7LzV7DL2_GpR5P_qTfYisViF_Ly9hcJpdJGueGje-GPmo_ETD_GXwzSDeA-fiE2YTR8abWmJmoeTmVPGe_YOF-qKvuVmT0Nx4_4XdyFbri-YqlW0WsqayctJABx=s0-d-e1-ft#https://d1a2o89e23clzw.cloudfront.net/emails/e8584a67f9c98641/ace5ae205500e33923062398a7935237.jpg">

         <br>
         <h4>Warning signs to look out for ⚠️</h4>
         <p>You can judge whether your watering schedule is right for your plant by keeping an <pr>
           eye out for these signs:</p><pr>
           <h4>😞 The leaves are yellowing or droopy.</h4>
          <p> You might be watering too much, or may not have proper drainage.</p><pr>
        <h4> 🍂 My plant has dry or curling leaves.</h4>
        <p> This likely means your plant needs more water. Some plants are used to tropical <pr>
          conditions so try moving them to a room with higher humidity like the bathroom. Use <pr>
           care though - you don't want to overcompensate by drowning your plant. Curling <pr>
           leaves can also be caused by over-watering, so remember to use the finger-dip <pr>
           test first to see what you think the problem is!</p>
        <h4>What shall I do when I go on holiday? ✈️</h4>
        <p> If you’re concerned about leaving your plant behind, there are a few methods <pr>
           we recommend to keep it alive.</p>
        <p>1. There are a couple of useful gadgets which promise to keep your plants happy while you <pr>
        can't tend to them. Some products, such as water bulbs, slowly drip water into your plant's <pr>
         soil to keep them hydrated. Others allow the plant itself to suck up water when it needs <pr>
          - check out hydrospikes for this. </p>
        <p>  2. For a DIY method for small plants, try putting one end of a damp piece of cloth in <pr>
           the soil and the other in a glass of water - as the plant needs more moisture it will <pr>
            wick it up through the cloth. For large plants, place several layers of damp newspaper <pr>
             on top of the soil before you head to the airport. </p>
        <p>3. An alternative is to recruit another person to babysit. We bet if you ask a plant-loving <pr>
         friend nicely they'll pop round every once a week to check up on your plant pals. 💧 </p>
        </p>
        <pre>
        </pre>
        <h4>•	Lesson 3:</h4><h3> How much light does my plant need? 🌤</h3>‏
        <p>Let's start by getting one thing clear - all houseplants need some natural sunlight <pr>
         to survive, but each one likes different levels of light depending on their natural habitat.<pr> </p>
        <h3>1. What direction are your windows facing?</h3>
        <p>When picking the next addition to your plant gang, start by working out what direction <pr>
           the windows face using the compass on your smartphone.  Remember to turn off the lights <pr>
           to get a measure for how the natural light fills the room, as houseplants can't feed off a lightbulb. 🌻 <pr> </p>
        <h3>2. How much light is coming through the window?</h3>
        <p>Then look out of the window and estimate how much of the day is in the shadow of another <pr>
           building, remembering that the sun will move East to West over the course of the day. <pr>
           If you are up higher than the buildings around you, your window will get much more <pr>
           light than if you are down in a basement flat in a built up street. 🏢🏠</p> <pr>
        <p style="display: inline-block" > Find out more about sunlight here: <a style="display: inline-block; text-decoration: underline; color: #3090C7;" href="https://youtu.be/F79S2yeGKUY"> https://youtu.be/F79S2yeGKUY </a> </p>
        <pre>
        </pre>
        <h4>•	Lesson 4:</h4><h3> Do I need to clean my plant? 🛀🧼‏</h3>
        <P>It’s worth cleaning your plant from time to time. Not only will this keep it healthier, but <pr>
        it also encourages you to check in with your green gang to spot any signs of ill health. Dust on <pr>
        your plant’s leaves prevents sunlight from reaching them, which will affect their growth. It can  <pr>
        also block the pores on the leaves, which suffocates the plant. ☀️</p>
        <p> We recommend cleaning the leaves  <pr>
        every month or so using a damp cloth. Plants with fuzzy leaves can be cleaned using a soft brush. <pr>
        While you’re doing this, take the opportunity to examine your plant for any signs of stress or disease.<pr>
        If there are dead, brown or yellowing leaves you can gently remove them, and trim brown leaf tips,<pr>
        making sure not to cut into the healthy part of the plant. 🍂 </p>
        <p>If you think cleaning the leaves will take ages (maybe you’ve got a plant withloads of leaves <pr>
        like Bertie, or a bigger one such as Rick)you can just pop your plant in the shower.</p> 🚿 <pr>
      <p>  Use tepid water to clean the leaves, making surepr not to hold the shower <pr>
         head too close to your plant - the force of the water could damage them.  </p> <pr>

        <h4>•	Lesson 5:</h4> <h3>How do I make sure the humidity is right? 🌴🚿‏</h3>
        <p>plants that come from tropical climates are used to higher levels of humidity than those <pr>
        found in most homes. Those with delicate, thin leaves are likely to be most susceptible to drying out. <pr>
        There are a few ways to deal with this, so don’t fret!</p>
    <p>1. You could move your plant to a more humid room such as the kitchen or bathroom. 🧖‍ </p>
      <p>2. Houseplants can also be misted, in addition to their normal watering, to imitate a humid environment.</p>
      <pre>
      </pre>
        <img src="https://ci5.googleusercontent.com/proxy/QSb9gv7htN0tQ04AtR09zZ-39_OkmEa8k-bOt9qOToxFzpS2UB9Qe_1r8HkUTsvAsVWjBb-kk-I-fudxtrVDxf3lh70wrL5zb7dx8yeg33GeF4WOFMzdbvhibJuuM6Viq_74o6aFF-_KE22WMnDrIvXUZRfL=s0-d-e1-ft#https://d1a2o89e23clzw.cloudfront.net/emails/e8584a67f9c98641/304ba002f4e1acf25ef4a63544ecbd30.gif"> <pre>
        </pre>
        <h3> Create a humid environment 💧</h3>
        <p>
        If you’re keeping plants that like high humidity in a dry room, there are a couple
         of quick homemade tricks to increase humidity that you could try:</p>
      <p>  1. Group your plants together to create a humid microclimate, as they release moisture <pr>
        through the transpiration process.</p>
        <p>2. Invest in a humidifier. These devices can keep your plants happy but are also known to <pr>
         improve your own health, skin and sleep quality. 😴 </p>
      <p>  3. Fill a tray with pebbles and add water to the halfway point. Place your plants on top <pr>
        of the pebbles, making sure they are not actually sitting in the water. Replace the water with <pr>
         a fresh batch from time to time. This quick trick can really help your tropical plants to flourish.<pr> </p>

        <h4>•	Lesson 6:</h4><h3> What about soil and fertiliser? 💪</h3>
        <p>Just like us, plants need healthy food from time to time to keep up their strength. Fertiliser <pr>
        is a product you can add to the soil to top up nutrients that would be naturally replenished <pr>
        in the wild by decomposing stuff.</p>
        <p> All indoor plants use up nutrients at different rates at <pr>
        different times of the year, so check your plant’s product page to find out if it would <pr>
        benefit from being fertilised in the spring and summer.Another way to restore your plant’s <pr>
        nutrients is by repotting it with a batch of multi-purpose compost. </p>
        <p>You’re unlikely to have to do this for a year or two, but if it has been living in the same soil for a long time and is <pr>
        starting to look unhealthy, think about repotting it into new compost.</p>
        <p>After repotting, you won’t need to feed your plant for a few weeks - you don’t want to overdo it. Check the compost <pr>
        packet for information on how long its nutrients will last.</p>
        <p>Most plants live happily in multipurpose soil except cacti and succulents which need a special soil, and some outdoor plants which like <pr>
          a different type called ericaceous soil.</p>
        <pre>
        </pre>
        <h4>•	Lesson 7:</h4><h3> Should I trim – or ‘prune’ – my plant? 🥀</h3>
        <p>Pruning, which means removing dead or damaged leaves, stems and buds from your <pr>
        plants can really help to refresh them, as it allows your plant to focus on new <pr>
        growth rather than waste energy on old leaves. 🍃 </p>
        <p>However, check the plant’s product page to see whether it’s a sign of poor health <pr>
        and review your care routine.You may be able to save the leaf by just trimming <pr>
        off the brown ends, but if the leaf is entirely brown chop it off at the base, as it will not recover.✂️ </p>
      <p>  Some flowering plants will also require ‘deadheading’, which involves snipping or pinching off dead flowers. 🥀 <pr> </p>

        <h4>•	Lesson 8:</h4><h3> Should I change how I look after my plant in the winter? 🌵 ☃️</h3>
        <p>In the tropical places, there aren’t as dramatic seasonal changes in the <pr>
        climate through the year as we have here.</p>
        <p>This is why they make great houseplants that are relatively easy to care for - because their natural conditions are a good <pr>
        match for your thermostatically controlled home throughout the year.</p>
      <p>  However, there are a few changes during autumn and winter that should affect how you care for your indoor plants.</p>
        <h3>Move towards a window ☀️</h3>
        <p>Shorter daylight hours in winter may mean that your plant needs to be placed closer to a <pr>
        window than they would in the summer to get enough light. Make sure to also clean any dust <pr>
         off the leaves so they can soak up all the rays.</p>
        <h3>Careful of radiators 🔥</h3>
        <p>Make sure your plant isn’t right next to a radiator because the heat may be too <pr>
        extreme for the plant and will dry out their soil. If you've not got a lot of <pr>
        space, you could instal a shelf above your radiators to deflect hot air away <pr>
        from your plants and into the centre of the room instead.</p>
        <p>The same applies with air-conditioning units in the summer months.</p>
        <p>  If you have underfloor heating,this can upset your plants by keeping their roots too warm.</p>
          <p> Plant stands are a great   way around this problem.Similarly, cold drafts from open or poorly insulated windows <pr>
        will make your houseplant unhappy - they can freeze in minutes if exposed to cold air.</p>
        <h3>Don't shock them 🙀</h3>
        <p>Another good rule of thumb is to try to avoid dramatic changes that might be a <pr>
        bit of a shock, like moving your houseplant from a very cold to very warm room. </p>
      <p>  If you turn the heating off when you go away you might want to shuffle your <pr>
        plants to the warmest spot in the house. 🧣🧤</p>
        <h3>Reduce watering 💦</h3>
        <p>Most plants are actively growing during the spring and summer but then slow down, <pr>
        or even become completely dormant over winter. </p>
        <p>As a result they are gobbling up lesswater and nutrients. Remember to do the finger-dip test before watering!</p>
         <pre>
        </pre>
        <h4>•	Lesson 9:</h4><h3> Why are my plant's leaves falling off? 🍃</h3>
        <p>If your houseplant is dropping leaves, it may be a normal part of their life cycle. </p>
      <p>  For example, some shed leaves during winter so they have less foliage to maintain while  the days are darker.</p>
      <p>   Others shed leaves year-round and some never naturally shed at all,
        so read up on your plant to find out how much leaf fall is normal for your plant. 🍂 </p>
      <p>  There are a few reasons why an indoor plant that shouldn't normally drop leaves might <pr>
        be doing so. They will often drop leaves if they’re in shock.</p>
        <h3>Adjustment to their new home 🏡</h3>
        <P>When your plant is delivered the environmental change coming into your cosy home <pr>
        or office might cause it to readjust, which can involve shedding some leaves. </p>
        <p>If you move it to a different spot in your home the same thing can happen. If it’s only a couple <pr>
        of leaves, and the rest of the plant looks healthy, just give it time and appropriate TLC to get settled in.</p>
        <h3>Lack of light 🌥</h3>
        <P>Plants make their energy from the natural light that they receive, so if brightness levels <pr>
        drop a plant may struggle to maintain all of its leaves.</p>
        <p> Dropping a few is an efficient way to reduce the energy levels a plant requires - check your plant’s product page to see if it will <pr>
        appreciate being moved closer to a window.</p>
        <h3>Time for re-potting 🍯</h3>
        <P>If a plant is outgrowing its pot it might drop leaves as it can’t maintain all t <pr>
        he new ones it tries to grow. </p>
        <p>If you can see the roots in the surface of the soil,or coming out of the bottom of its nursery pot (the brown one that it comes in),<pr>
        it might be time to repot it.</p>
        <h3>Overwatering 💦</h3>
        <p>When a plant receives too much water it absorbs it into its system, but with
        nowhere to go the water floods the leaves. </p>
        Gradually, starting from the bottom ofthe plant, you’ll notice leaves yellowing and going mushy. </p>
        <p>As they lose their structure the leaves can’t support their own weight anymore, causing them to drop.</p>
        <h3>Under-watering 🍂</h3>
        <p>On the other hand, plants rely on a certain level of water to stay healthy <pr>
        and stand tall! Water within a plant’s system is what helps it to stand up.</p>
         <p>So when a plant is under-watered the cells shrink and can't hold the leaves up. </p>
        <p> As well as causing drooping, lack of water will cause leaves to curl up and go dry. </p>

         <pre>
         </pre>

         <p style="display: inline-block;" > Source: </p>
         <a  style="display: inline-block; text-decoration: underline;"  href="https://www.patchplants.com/gb/en/"> PATCH PLANTS </a>
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
