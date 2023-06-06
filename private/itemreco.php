<?php
    $current_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $needle = "?item_id=";
    $link_id = substr($current_link, strpos($current_link, $needle) +9);

    $recoarray = array();
    $sql = "SELECT * FROM items ORDER BY item_id asc";

    for ($i = 0; $i < 3; $i = $i + 0) {
        $conn = mysqli_connect("localhost:3307", "root", "", "items");
        $result = $conn->query($sql);
        $number = rand(0,$result->num_rows);
        if (in_array($number,$recoarray) == false) {
            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    if ($row["item_id"] == $number) {
                        array_push($recoarray,$number);
                        if ($row["item_id"] != $link_id) {
                            echo '<a class="recommended-item" href="' . 'item?item_id=' . $row["item_id"] . '"><img src="' . $row["item_img"] . '"></a>';
                            $i = $i + 1;
                        }
                    }
                }
            }
        }
    }
?>