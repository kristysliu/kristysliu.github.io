<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = "work";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kristy'S Portfolio Home</title>
  <link rel="stylesheet" type="text/css" href="styles/main.css">
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

    <div class = "indexflex">
      <div class = "indexflexrow1">
      <div class = "indexflexbox23">
        <div id="one">
            <img class="image_on" src="images/zumataindex1.png" alt="logo"/>
          <a href = "zumata.php">
          <img class="image_off" src="images/zumataindex2.png" alt="logo" />
          </a>
        </div>
        <div class = "indexflexbox_projectcaption">
        <h3>Zumata</h3>
        <h5>Marketing, Business Development</h5>
        </div>
      </div>
      <div class = "indexflexbox13">
        <div id="two">
            <img class="image_on" src="images/applefestindex1.png" alt="logo"/>
          <a href = "applefest.php">
          <img class="image_off" src="images/applefestindex2.png" alt="logo" />
          </a>
        </div>
        <div class = "indexflexbox_projectcaption">
        <h3>Apple Festival</h3>
        <h5>User Research</h5>
        </div>
      </div>
    </div>
    <div class = "indexflexrow2">
    <div class = "indexflexbox12">
      <div id="three">
          <img class="image_on" src="images/designworkbookindex1.png" alt="design fiction"/>
          <!--
        <a href = "designfiction.php">
        <img class="image_off" src="images/designworkbookindex2.png" alt="design fiction" />
        </a>
        -->
      </div>
      <div class = "indexflexbox_projectcaption">
      <h3>Design Workbook</h3>
      <h5>Speculative Design</h5>
      </div>
    </div>
    <div class = "indexflexbox12">
      <div id="four">
        <img class="image_on" src="images/travelindex1.png" alt="logo"/>
        <!--
        <a href = "travel.php">
        <img class="image_off" src="images/travelindex2.png" alt="logo" />
        </a>
      -->
      </div>
      <div class = "indexflexbox_projectcaption">
      <h3>Travel Blog</h3>
      <h5>Personal Passion</h5>
      </div>
    </div>
  </div>
  </div>

  <?php
  include("includes/footer.php");
  ?>

  </body>
  </html>
