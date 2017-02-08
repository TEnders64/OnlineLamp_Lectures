<?php
//
// $understand = true;
// $practice = true;
// if ($understand == true && $practice == true){
//   echo "<h1>BRILLIANT!</h1>";
// }
// else {
//   echo "<h1>You must go back and review</h1>";
// }

$dogs_in_depth = array('Bruce' => [9, 'Dachshund', 'Dark Brown Brindle'], 'Dito' => [9, 'Dachshund', 'Light Brown']);
//
foreach ($dogs_in_depth as $dog => $dog_info){
  echo "<h1>" . $dog . "</h1>";
  for ($i=0; $i < count($dog_info); $i++) {
    echo "<p>" . $dog_info[$i] . "</p>";

  }
}

 ?>
