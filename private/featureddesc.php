<?php
    $current_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $needle = "?item_id=";
    $link_id = substr($current_link, strpos($current_link, $needle) +9);

    $recoarray = array();
    $sql = "SELECT * FROM items ORDER BY item_id asc";

    require_once("dbconnect.php");
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    if ($row["item_id"] == $result->num_rows) {
                        if ($row["item_id"] != $link_id) {
                            echo '<h2 class="heading-title">' . $row["item_name"] . '</h2> <p class="heading-desc">' . $row["item_desc"] . '</p>';
                        }
                    }
                }
        }
?>