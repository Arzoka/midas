<?php
if (!empty($_POST)) {
  if(isset($_POST['standard'])){
    $sql = "SELECT * FROM items ORDER BY item_id asc";
  }
  if(isset($_POST['highlow'])){
    $sql = "SELECT * FROM items ORDER BY item_price desc";
  }
  if(isset($_POST['lowhigh'])){
    $sql = "SELECT * FROM items ORDER BY item_price asc";
  }
  if(isset($_POST['az'])){
    $sql = "SELECT * FROM items ORDER BY item_name asc";
  }
    
}

else {
	$sql = "SELECT * FROM items ORDER BY item_id asc";
}

$conn = mysqli_connect("localhost", "root", "", "items");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
        $n_item_price = number_format((float)$row["item_price"] , 2, '.', '') . ',-';
		$n_item_name = $row["item_name"];
		if ($row["item_img"] != null) {
			echo '<a href="item.php?p=' . $row["item_id"] . '"> <figure class="item-card"> ' . '<div class="item-img-wrap"> <img class="item-img" src="' . $row["item_img"] . '"' . '</img> </div>' . '<div class="item-text-wrap"> <h2 class="item-name item-text">' . $n_item_name . '</h2>' . '<h3 class="item-price item-text">' . $n_item_price . "</h2> </div> </figure> </a>";
		}
		else{
			echo '<figure class="item-card"> ' . '<div class="item-img-wrap"> <img class="item-img" src="img/noimage.webp"' . '</img> </div>' . '<div class="item-text-wrap"> <h2 class="item-name item-text">' . $n_item_name . '</h2>' . '<h3 class="item-price item-text">' . $n_item_price . "</h2> </div> </figure>";
		}
	}
}

$conn->close();
?>