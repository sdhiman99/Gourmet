<?php
 include("PhpMysqlConnectivity.php");

  $name="chawalas";

  $res=$mysqli_query();//$link,"INSERT INTO `restaurant`( `name`, `address`, `mobile_no`, `star`, `city`, `open_time`, `close_time`, `veg_nonveg`) VALUES ('$name','russe','1234567894','3','jabalpur','11:00:00','22:00:00','both')");//,$link);
  $result = $mysqli_query($link,"SELECT id from restaurant");
  echo "It works";
 ?>