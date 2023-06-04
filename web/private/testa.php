<?php

  // mysqli_connect(Serverport,Username,Password,Database)
  $mysqli = mysqli_connect("mediacollege-hosts-st2.cust.webslice.eu:3306", "c8516Arzoka", "Taiga250123!", "c8516midas");
  
  // $result = $mysqli->query($sql);
  // $sql = "SELECT * FROM items ORDER BY item_id asc";

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

?>
