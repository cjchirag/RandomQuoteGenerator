// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

<?php
$Quotes = [
  ["name" => "Chirag", "quote" => "Bro!"], ["name" => "Chirag", "quote" => "What the hell!"], ["name" => "Chirag", "quote" => "I love you!"]
];
?>


// Create the getRandomQuuote function and name it getRandomQuote

<?php
function getRandomQuuote() {
  if (empty($Quotes)) {
    return "No Quotes found in the database";
  } else {
      $randomNumber = rand(0, count($Quotes));
      return $Quotes[$randomNumber];
  }
}
?>

// Create the printQuote funtion and name it printQuote

<?php
  function printQUote() {
    $TheQuote = getRandomQuote();
    if (is_string($TheQuote)) {
      return "Theres an error";
    } else {
      return "$TheQuote[quote], by $TheQuote["name"]";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <p class="quote"> <?php $PrintingQuote = printQUote();
      echo "$PrintingQuote"; ?> </p>
      <p class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
