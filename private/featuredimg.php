<?php
    $current_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $needle = "?item_id=";
    $link_id = substr($current_link, strpos($current_link, $needle) +9);

    $recoarray = array();
    $sql = "SELECT * FROM items ORDER BY item_id asc";

    $conn = mysqli_connect("localhost:3307", "root", "", "items");
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    if ($row["item_id"] == $result->num_rows) {
                        if ($row["item_id"] != $link_id) {
                            echo '<img class="heading-image" src="' . $row["item_img"] . '">';
                        }
                    }
                }
        }
?>