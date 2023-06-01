<?php
$cars = array (
    array("Potato",40,8),
    array("Cabbage",20,1),
    array("Spinach",80,55),
    array("Cauliflower",15,25)
  );

  for ($row = 0; $row < 4; $row++) {

        echo $cars[$row][0].": In stock: ".$cars[$row][1].", sold: ".$cars[$row][2]."<br>";

    
  }

// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>