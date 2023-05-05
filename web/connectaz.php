<?php
$conn = mysqli_connect("localhost", "root", "", "items");
$sql = "SELECT * FROM items ORDER BY item_name asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
        $n_item_price = "€ " . number_format((float)$row["item_price"] , 2, '.', '');
		$n_item_name = $row["item_name"];
		if ($row["item_img"] != null) {
			echo '<figure class="item-card"> ' . '<div class="item-img-wrap"> <img class="item-img" src="' . $row["item_img"] . '"' . '</img> </div>' . '<h2 class="item-name item-text">' . $n_item_name . '</h2>' . '<h3 class="item-price item-text">' . $n_item_price . "</h2> </figure>";
		}
		else{
			echo '<figure class="item-card"> ' . '<div class="item-img-wrap"> <img class="item-img" src="img/noimage.webp"' . '</img> </div>' . '<h2 class="item-name item-text">' . $n_item_name . '</h2>' . '<h3 class="item-price item-text">' . $n_item_price . "</h2> </figure>";
		}
	}
}
else {
	echo "no results";
}
$conn->close();
?>