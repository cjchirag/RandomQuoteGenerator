
 <?php

 function randomizeQuotes ([String] $Quotes): [String]  {
   $newArray = [];
   $indexes = [];
   for ($index_num = rand(0, count($Quotes)-1); $index_num <= count($Quotes); $index_num++) {
       $condition = false;
       for ($i = 0; i<=count($indexes); i++) {
         if ($indexes[i]==$index_num) {
           $condition = false
         } else {
           $condition = true
         }

       if ($condition==true) {
         $newArray =[$Quotes[$index_num]]
       }
       $indexes = [$index_num];
   }
 }
 return $newArray
 }

$randomQuotes = randomizeQuotes(["This is big", "Wow", "What the hell", "I love that", "Lets do this", "I love you"]);
echo $randomQuotes
?>
