<?php
  echo "<h1>Starting the program</h1>";
  // flip coin 5000 times => for loop
  // variable for heads and tails to keep track of totals
  $heads = 0;
  $tails = 0;
  for ($i = 1; $i <= 5000; $i++){
    // need a random function for evenly determining heads or tails
    $flip_int = rand(0,1);
    // forked logic: if it's heads, increment heads by 1, if tails, increment tails by 1
    if ($flip_int == 0) {
      $flip_status = "heads";
      $heads++;
    }else{
      $flip_status = "tails";
      $tails++;
    }
    // the counter in the for loop will help us output attempt #
    echo "<p>Attempt " . $i . ": Throwing a coin... it's a " . $flip_status . "! ... Got " . $heads . " head(s) and " . $tails . " tail(s)</p>";
  }
  echo "<h1>Ending the program - thank you!</h1>";
 ?>
