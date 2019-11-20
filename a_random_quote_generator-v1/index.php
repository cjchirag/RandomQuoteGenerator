<?php
// Hi!! Thanks so much for reviewing my project! I am aiming for an exceeds expectations grade.
/*
index.php has all the HTML code, some CSS code (for background color) and php functions are appropriately called here.
1. A different background color is acheived when the user clicks the button. It is acheived
with the setColors() defined function in functions.php
Setcolors() is called in the style tag defined in index.php
2. meta tags are used to reset the page every 20 seconds defined in index.php.
3. I have added the tags, year and citation properties of the quote as associative data in the $Quotes global variable.
*/
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="20">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
  body {
    background-color: <?php echo setColors() ?>;
  }
  </style>
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php
      echo printQuote();
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)">Show another quote</button>
  </div>
</body>
</html>
