
  <?php
  $Quotes = [];
  ?>
 <?php

 function randomizeQuotes () {
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
       }
       if ($condition==true) {
         $newArray =[$Quotes[$index_num]]
       }
       $indexes = [$index_num];
   }
 }

    ?>
