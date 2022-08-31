<?php

include './dbcon.php';

if (isset($_POST['st'])) {
    $res = mysqli_query($conn, 'SELECT * FROM `search-using-key-word` ORDER BY name');

    if (mysqli_num_rows($res) > 0) {
        $output = '<option value="0" class="dropdown-item" selected>Selsect  Product</option>';
        while ($dis = mysqli_fetch_array($res)) {
            $id = clear($dis['id']);
            $name = clear($dis['name']);
            $price = " => Price -> " . clear($dis['price']);
            $output .= <<<html
                <option value="$id">$name$price</option>
            html;
        }
        echo $output;
    }
} elseif (isset($_POST['sell-st'])) {
    $id = clear($_POST['id']);
    $stock = clear($_POST['stock']);
    $sql = mysqli_query($conn, 'SELECT * FROM `search-using-key-word` WHERE `id` = "' . $id . '"');
    if (1 == mysqli_num_rows($sql)) {
        $dis = mysqli_fetch_array($sql);
        $ser_ = $dis['stock'];
        $ser_ = (int)$ser_;
        $upd_stock = $ser_ - $stock;
        if(mysqli_query($conn,"UPDATE `search-using-key-word` SET `stock`='$upd_stock' WHERE id = '$id'")){
            echo 'Success';
    } else {
        echo 'No item found';
    }
}
}