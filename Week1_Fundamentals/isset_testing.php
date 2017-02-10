<?php

  $stuff = array("thing1" => "marker", "thing2" => "headphones");
  if (!isset($stuff['thing3'])){
    echo "it's not set";
  } else {
    echo "it's set";
  }

?>
