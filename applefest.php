<?php
include("includes/init.php");
$title = "applefest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kristy's Portfolio: Apple Festival</title>
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/projectpages.css">
</head>
<body>
  <div id = "logo">
    <!-- <a href = "index.html">
      <img src = "images/logo.png" alt="logo"/>
    </a> -->
  </div>
  <div class = "navigation">
    <div class = "navigation_flex1">
      <h1>kristy liu</h1>
    </div>
      <?php
      include("includes/header.php");
      ?>
  </div>

  <div class = "projectpage">
    <div class = "projectpage_banner">
      <img src = "images/zumatabanner.png" alt = "applefest banner"/>
    </div>
    <div class = "projectpage_intro">
    <h2>Apple Festival</h2>
    <p>Web Development</p>
    <p>Fall 2018</p>
    </div>

    <section>
    <p>In my Intro to Web Programming class, our second project was to create a responsive website for a local event called Ithaca Apple Festival.
      </p>
    </section>

    <section>
    <h5>User Research</h5>
    <div class = "sidehighlight">
      <p>I visited the festival to experience its attractions and ask for opinions from visitors. The target audience of my website is freshman and transfer students from nearby universities such as Cornell and Ithaca College.</p>
    </div>

    <h5>Persona</h5>
    <div class = "sidehighlight">
      <p>Jon is a Cornell University junior transfer from Duke, studying Chemistry and Computer Science, who is eager to explore more of Ithaca. He's been at Cornell for two months and has been actively getting involved on campus and in the community. He joined a research lab, plays club basketball, and tutors kids in piano lessons. So far, he's gone to homecoming and hiked the gorges, but he has yet to go to Apple Fest for the first time. He's very excited because he loves fruits and most of all, apples. In fact, he has a huge appetite in general and eats a lot of McDonalds. Jon also loves running and prefers to walk around campus, so he's never taken the TCAT and also has never been to Ithaca Commons. Nevertheless, he's excited for all the food and to go with his girlfriend for the first time to Apple Fest and spend a nice afternoon together!</p>
      <p><em>Pain Points:</em>
      1. Wants to visit Apple Fest, but is not familiar with Ithaca, and doesn't know how to get to the commons.
      2. Wants to take friends/girlfriend to Apple Fest but isn't sure if it's the right environment/atmosphere.
      3. Wants to create a plan to have the full Apple Fest experience and wants more information about food, events, and other things you can do there.
    </p>
    </div>

    <h5>Sketches & Iterations</h5>
    <div class = "sidehighlight">
      <p>After identifying Jon's pain points, I created sketches for both the site's desktop and mobile displays.
        Through several iterations and user testings, I created two sets of sketches, a draft website, and the final website.</p>
    </div>

    <h5>User Testing</h5>
    <div class = "sidehighlight">
      <p>User 1 is a 19-year-old Cornell female sophomore, majoring in Biological Sciences, who is a transfer student from SUNY Stony Brook. She enjoys dancing, watching cartoons, and urban fashion. She also really enjoys traveling and spent the past winter break solo traveling around Denmark. She's been at Cornell for a little over 6 months and is eager still to have more adventures in Ithaca with her friends. This year was the first year she attended Apple Fest.</p>
      <p>User 2 is an 18-year-old freshman male, who is a student at Cornell University. He enjoys playing tennis and playing video games. He plans to major in Computer Science and is passionate about coding and math. He loves Cornell so far but feels like he wants to branch out more and explore more of Ithaca. He went to Apple Fest for the first time and Ithaca Farmer's Market with his freshman friends in September and really enjoyed the food!</p>
      <p>User 3 is a Cornell sophomore male, who is a transfer from New York City. He is majoring in Economics and is involved in several business clubs on campus. He's passionate about traveling, has a major sweet tooth, and enjoys watching movies, having late-night conversations with friends, and playing badminton. After college, he wants to go into a corporate job, potentially in the financial technology industry. This semester, he wants to stay fit and spend more equality time with friends. He's explored some parts of Ithaca, but he hasn't attended Apple Fest before although he wants to before he graduates.</p>
      <p>User 4 is a Cornell sophomore Spring transfer majoring in Hotel Administration, and she is from Hong Kong. She's adventurous and likes finding good eats. During her freshman year, she spent a lot of time in the commons and explored many parts of Ithaca, going to the gorges often. She also loves going to the Ithaca Farmer's Market. In fact, this semester, she's gone to the farmer's market almost every weekend with  friends because she thinks it's a great way to escape the fast-pace life of Cornell and eat good food. After college, she aspires to travel more and pursue a career in design.</p>
    </div>

    <h5>Solution</h5>
    <div class = "sidehighlight">
      <p>Information here</p>
    </div>

  </div>

  <div class = "projectpage_footer">
    <p><a href = "index.php">Return</a></p>
    <p><a href = "zumata.php">Next Project</a></p> <!--change this link-->
  </div>

  <?php
  include("includes/footer.php");
  ?>

</body>
</html>
