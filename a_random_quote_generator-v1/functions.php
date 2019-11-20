<?php

/*Global Variable -> Storing all the quotes and their properties.
*/

$Quotes = [
['name' => "Mahatma Gandhi", 'quote' => "Where there is love there is life.", 'citation' => "Google", 'year' => 'Sometime before 1948', 'tags' => 'Inspirational'],
['name' => "Mahatma Gandhi", 'quote' => "The future depends on what we do in the present.", 'citation' => "Google", 'year' => 'Sometime before 1948', 'tags' => 'Inspirational'],
['name' => "Gary Vaynerchuk", 'quote' => "I put zero weight into anyone’s opinion about me because I know exactly who I am. Can you say the same? When", 'citation' => "Google", 'year' => '2010-19', 'tags' => 'Inspirational'],
['name' => "Gary Vaynerchuk", 'quote' => "Even if your ambitions are huge, start slow, start small, build gradually, build smart.", 'citation' => "Google", 'year' => "2010-19", 'tags' => 'Inspirational'],
['name' => "Keith Ferrazzi", 'quote' => "Success in any field, but especially in business is about working with people, not against them.", 'citation' => "Google", 'year' => "2010-19", 'tags' => 'Business'],
['name' => "Keith Ferrazzi", 'quote' => "Poverty, I realized, wasn’t only a lack of financial resources; it was isolation from the kind of people who could help you make more of yourself.", 'citation' => "Google", 'year' => "2010-19", 'tags' => 'Business'],
['name' => "Keith Ferrazzi", 'quote' => "I believe that every conversation you have is an invitation to risk revealing the real you.", 'citation' => "Google", 'year' => "2010-19", 'tags' => 'Business'],
['name' => "Keith Ferrazzi", 'quote' => "by giving your time and expertise and sharing them freely, the pie gets bigger for everyone.", 'citation' => "Google", 'year' => "2010-19", 'tags' => 'Business'],
['name' => "Keith Ferrazzi", 'quote' => "SUCCESS IN LIFE = (THE PEOPLE YOU MEET) + (WHAT YOU CREATE TOGETHER).", 'citation' => "Google", 'year' => "2010-19", 'tags' => 'Business'],
['name' => "Keith Ferrazzi", 'quote' => "Friendship is created out of the quality of time spent between two people, not the quantity.", 'citation' => "Google", 'year' => "2010-19", 'tags' => 'Business']
];

// Number of items in the $Quotes
$maxCount = count($Quotes);
// Global variable that is tracing the current quote selected. Default set to error until function printQuote() is called.
$TextQuote = 'There is an error';
// Global variable that is tracing the current author selected. Default set to error until function printQuote() is called.
$TextBy = 'Author unavailable';
// Global variable that is tracing the current citation selected. Default set to error until function printQuote() is called.
$TextCitation = 'Author unavailable';
// Global variable that is tracing the current year selected. Default set to error until function printQuote() is called.
$TextYear = 'Year unavailable';
// Global variable that is tracing the current tags selected. Default set to error until function printQuote() is called.
$TextTags = 'Tags unavailable';

// Returns a random Quote collection.
function getRandomQuote()  {
  global $Quotes, $TextQuote, $TextBy, $maxCount, $TextCitation, $TextYear, $TextTags;
// if the global collection is empty, an error string is returned. Else, a single quote collection is returned.
  if (empty($Quotes)) {
    return "No Quotes found in the database";
  } else {
      $randomNumber = rand(0, $maxCount);
      return $Quotes[$randomNumber];
  }
}



function printQuote() {
  global $TextQuote, $TextBy, $TextCitation, $TextYear, $TextTags;
  $TheQuote = getRandomQuote();
/*
if getRandomQuote() returns a string, an error message is printed.
else, the appropriate html tag in string format is returned by the function by setting the global variables
correctly.
*/
  if (is_string($TheQuote)){
    $TextQuote = 'Error in retreiving the string';
  } else {
  $TextQuote = $TheQuote['quote'];
  $TextBy = $TheQuote['name'];
  $TextCitation = $TheQuote['citation'];
  $TextYear = $TheQuote['year'];
  $TextTags = $TheQuote['tags'];

  $HTMLText = " <p class='quote'> $TextQuote </p>
  <p class='source'> $TextBy
  <span class='citation'> $TextCitation </span>
  <span class='year'> $TextYear </span>
  <span class='tags'> $TextTags </span>
</p> ";
  return $HTMLText;
  }
}

//Global variable storing all the colors to be randomized.
$backgroundColors = [
  "#FC766AFF", "#5B84B1FF", "#5F4B8BFF", "#E69A8DFF", "#42EADDFF", "#CDB599FF", "#00203FFF", "#ADEFD1FF", "#00539CFF", "#EEA47FFF"
];
// Number of color objects in the $backgroundColors.
$colorsMax = count($backgroundColors);

// A function to return a random color from the collection of colors objects.
function setColors() {
  global $backgroundColors, $colorsMax;
  if (empty($backgroundColors)) {
    return "#36b55c";
  } else {
      $randomNumber = rand(0, $colorsMax);
      return $backgroundColors[$randomNumber];
  }
}
?>

<?php
#  function printQUote() {
#    $TheQuote = getRandomQuote();
#    if (is_string($TheQuote)) {
#      return "Theres an error";
#    } else {
#      {$TheQuote[0]['quote']}
#      return "Quote: {$TheQuote[0]['quote']}";
#    }
#  }
?>
