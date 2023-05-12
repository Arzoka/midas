<?php
    $current_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $needle = "?p=";
    $link_id = substr($current_link, strpos($current_link, $needle) + 3);

    $sql = "SELECT * FROM items ORDER BY item_id asc";

    $conn = mysqli_connect("localhost", "root", "", "items");
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            if ($row["item_id"] == $link_id) {
                echo '<img class="item-page-img" src="' . $row["item_img"] . '">' . "</img>";
            }
        }
    }
?>