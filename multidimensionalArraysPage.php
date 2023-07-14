<?php
require_once './shared/header.php';
?>
<?php

//two-dimensional array (array bidimensional)
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
//echo $cars[0][0].": Em estoque: ".$cars[0][1].", Vendido: ".$cars[0][2].".<br>";
//echo $cars[1][0].": Em estoque: ".$cars[1][1].", Vendido: ".$cars[1][2].".<br>";
//echo $cars[2][0].": Em estoque: ".$cars[2][1].", Vendido: ".$cars[2][2].".<br>";
//echo $cars[3][0].": Em estoque: ".$cars[3][1].", Vendido: ".$cars[3][2].".<br>";
/*
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Linha número $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
*/

foreach ($cars as $row){
    foreach ($row as $col){
        echo "<p>" . $col . "</p>";
    }
}
?>
<?php
require_once './shared/footer.php';
?>

