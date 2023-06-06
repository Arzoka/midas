<?php

$mysqli = mysqli_connect("localhost:3307", "root", "", "items");
  
$sql = "SELECT * FROM items ORDER BY item_id asc";
$result = $mysqli->query($sql);



if ($result->num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
        $n_item_price = number_format((float)$row["item_price"] , 2, '.', '') . ',-';
		$n_item_name = $row["item_name"];
		if ($row["item_img"] != null) {
			echo '<a class="item-card-wrap" data-item-price="' . $row["item_price"] . '"data-item-name="' . $row["item_name"] . '"href="item?item_id=' . $row["item_id"] . '"> <figure class="item-card"> ' . '<div class="item-img-wrap"> <img class="item-img" src="' . $row["item_img"] . '"' . '</img> </div>' . '<div class="item-text-wrap"> <h2 class="item-name item-text">' . $n_item_name . '</h2>' . '<h3 class="item-price item-text">' . $n_item_price . "</h2> </div> </figure> </a>";
		}
		else{
			echo '<a href="item?item_id=' . $row["item_id"] . '"> <figure class="item-card"> ' . '<div class="item-img-wrap"> <img class="item-img" src="img/noimage.webp"' . '</img> </div>' . '<div class="item-text-wrap"> <h2 class="item-name item-text">' . $n_item_name . '</h2>' . '<h3 class="item-price item-text">' . $n_item_price . "</h2> </div> </figure> </a>";
		}
	}
}

?>