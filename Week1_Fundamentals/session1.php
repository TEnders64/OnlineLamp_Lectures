<?php
$age = 9; //integer
$age_in_dog_years = 56.5; //float
$speak = "WOOF!";
$errors = true;

/* ARRAYS */
$dogs = ['Bruce', 'Dito'];
//is the same as...
//$dogs = array('Bruce', 'Dito');
// echo $dogs[1];
// echo "<br>"; //we can echo values or HTML
// $dogs_in_depth = [['Bruce', 9, 'Dachshund', 'Dark Brown Brindle'], ['Dito', 9, 'Dachshund', 'Light Brown']];
// echo $dogs_in_depth[0][3];
// var_dump($dogs_in_depth);
$dogs_in_depth = array('Bruce' => [9, 'Dachshund', 'Dark Brown Brindle'], 'Dito' => [9, 'Dachshund', 'Light Brown']);
var_dump($dogs_in_depth['Dito']);

/* FUNCTIONS */
function sum_it_up($arr)
{
    $sum = 0;
    //iterate through the array and return a sum.
    for ($i = 0; $i < count($arr); $i++){
      $sum += $arr[$i];
    }
    return $sum;
}
echo sum_it_up([1,2,3, 100, 45, 45, 1, 2, 3, 4, 6,79, 0,0]);


/* CONDITIONALS */
$understand = true;
$practice = true;
if ($understand == true && $practice == true){
  // echo "<h1>BRILLIANT!</h1>";
}
else {
  // echo "<h1>You must go back and review</h1>";
}

/* LOOPS */

// $sum = 0;
// for (initialize ; condition to stop ; increment/decrement) {
//   //code...
// }
// var_dump($sum);

?>
