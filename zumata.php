<?php
include("includes/init.php");
$title = "zumata";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kristy's Portfolio: Zumata</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/projectpages.css"> !important
  <link rel="stylesheet" type="text/css" href="styles/zumata.css"> !important
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
    <div class = "navigation_flex2">
    <h4>
      <?php
      include("includes/header.php");
      ?>
    </h4>
    </div>
  </div>

  <div class = "projectpage">
    <div class = "projectpage_banner">
      <img src = "images/zumatabanner.png" alt = "zumata banner"/>
    </div>
    <div class = "projectpage_intro">
    <h2>Zumata</h2>
    <p>Business Development, Marketing</p>
    <p>June-August 2018</p>
    </div>

    <section>
      <p>Over the summer, I interned in Singapore at Zumata, a travel technology startup, where I worked closely with the Chief Operating Officer and two
      colleagues on marketing and lead generation initiatives. I worked with the team to <em> design, prototype, and pitch a chatbot proposal </em>for a mall client. Additionally, I also helped the startup
      improve their marketing strategy for the hotel industry by building an <em>email campaign</em>
      and creating <em>flyers and a proposal deck</em>.
      </p>
    </section>

    <section>
    <h4>A.I. Chatbot for Mall</h4>
    <h5>Task</h5>
    <div class = "sidehighlight">
      <p>To pitch to AMK Hub how chatbot technology on their website and Facebook Page could improve their malls' customer service. </p>
    </div>

    <h5>User Research</h5>
    <p>Our team interviewed 3 people, a woman who lived her whole life in Singapore,  a University student, and the company CEO an expat from Arizona
      in order to gain a better understanding of people's needs and how their mall experiences can be improved.
      I utilized the user interviews to create user personas and guide the chatbot's features.</p>
    From our discussion, we highlighted the following pain points:
    <ul><li>Parking ticket is tedious to obtain.</li>
      <li>Store directory is confusing.</li>
      <li>Searching for stores and products is inefficient.</li>
    </ul>

    <h5>Iterations</h5>
    <p>We... highlighted the benefits of implementing a chatbot versus a mobile application.</p>
    <div class = zumata_diagram>
      <img src = "images/zumataappvschatbot.png" alt = "app vs. chatbot diagram"/>
    </div>

    <h5>Solution</h5>

    </section>

    <section>
    <h4>Lead Generation & Marketing</h4>
    <h5><span style="color: #00dada">&#8212;</span>Task<span style="color: #00dada">&#8212;</span></h5>
    <p>The long-term marketing objective was to better optimize the lead generation funnel, particularly for clients in the hotel vertical seeking A.I. chatbot products.</p>

    <h5><span style="color: #00dada">&#8212;</span>User Research<span style="color: #00dada">&#8212;</span></h5>

    <h5>Solution</h5>
    <p>Spearheaded new email campaign that led to a conference with a major hotel chain and designed flyers.</p>

    <div class = "zumata_flex_container">
      <img src = "images/zumataflyer1.jpg" alt = "zumata flyer front"/>
      <img src = "images/zumataflyer2.jpg" alt = "zumata flyer back"/>
    </div>
    </section>

  </div>

  <div class = "projectpage_footer">
    <p><a href = "index.php">Return</a></p>
    <p><a href = "applefest.php">Next Project</a></p> <!--change this link-->
  </div>

  <?php
  include("includes/footer.php");
  ?>

</body>
</html>
