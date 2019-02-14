<?php
include("includes/init.php");
$title = "about";
$nameErrorString = "Please enter your name.";
$nameError = FALSE;
$emailErrorString = "Please enter a valid email address.";
$emailError = FALSE;
$messageErrorString = "Please enter a brief message, so I know your reason for reaching out :)";
$messageError = FALSE;
$validName = "";
$validEmail = "";
$validPhone = "";
$validCompany = "";
$validMessage = "";

  if (isset($_POST['submit'])) {
  $validForm = TRUE;
  $validName = $_POST['validName'];
  $validMessage = $_POST['validMessage'];

    if ($validName == ""){
    $validForm = FALSE;
    $nameError = TRUE;
    }

    if ($validMessage == ""){
      $validForm = FALSE;
      $messageError = TRUE;
      }

    $validEmail = filter_input(INPUT_POST, 'validEmail', FILTER_VALIDATE_EMAIL);
    if ($validEmail == FALSE){
      $validForm = FALSE;
      $emailError = TRUE;
      }


  }
    else{

    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Say Hi</title>
  <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>

  <div class = "navigation">
    <div class = "navigation_flex1">
      <h1>kristy liu</h1>
    </div>
      <?php
      include("includes/header.php");
      ?>
  </div>

    <div class = "about_flex_container">

    <div class = "about_flex_1">
    <div class = "headshot">
      <img src = "images/headshot.png" alt="headshot">
    </div>
    </div>

    <div class = "about_flex_2">
    <div class = "aboutme">
      <p> Hi, thanks for dropping by! I am a Sophomore at <em>Cornell University</em> pursuing an <em>Information Science</em> major with a User Experience Design and Data Science concentration. More...</p>
    </div>
    </div>
    </div>




    <div class = "socialmedia">
    </div>

    <div class = "form">
      <?php
      if ( isset($validForm) && $validForm ) { ?>

        <h2><em>Thanks for reaching out, <?php echo htmlspecialchars($validName); ?>! I'll be in touch shortly.</em></h2>

      <?php } else { ?>

        <h2>Drop Me a Line.</h2>

        <form id="contactForm" method="post" action="about.php">
          <fieldset>
            <legend>Contact Me</legend>

            <div class = "errorStyle">
              <?php if ($nameError == TRUE) echo $nameErrorString ?>
            </div>
            <p>
              <label for="nameEnter">Name:</label>
              <input id="nameEnter" type="text" name="validName" value="<?php echo htmlspecialchars($validName); ?>"/>
            </p>

            <div class = "errorStyle">
              <?php if ($emailError == TRUE) echo $emailErrorString ?>
            </div>
            <p>
              <label for="emailEnter">Email:</label>
              <input id="emailEnter" type="text" name="validEmail" value="<?php echo htmlspecialchars($validEmail); ?>"/>
            </p>

            <p>
              <label for="phoneEnter">Phone Number:</label>
              <input id="phoneEnter" type="text" name="validPhone" value="<?php echo htmlspecialchars($validPhone); ?>"/>
            </p>

            <p>
              <label for="companyEnter">Company:</label>
              <input id="companyEnter" type="text" name="validCompany" value="<?php echo htmlspecialchars($validCompany); ?>"/>
            </p>

            <div class = "errorStyle">
              <?php if ($messageError == TRUE) echo $messageErrorString ?>
            </div>
            <p>
              <label for="messageEnter">Message:</label>
              <input id="messageEnter" type="text" name="validMessage" value="<?php echo htmlspecialchars($validMessage); ?>"/>
            </p>


            <input type="submit" name="submit" value="Submit Order"/>
          </fieldset>
        </form>

      <?php } ?>

      </div>

  <?php
  include("includes/footer.php");
  ?>

</body>

</html>
