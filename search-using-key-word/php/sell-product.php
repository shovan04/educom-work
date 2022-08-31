<?php

include './dbcon.php';

if(isset($_POST['st'])){
    $res = mysqli_query($conn,'SELECT * FROM `search-using-key-word` ORDER BY name');

    if(mysqli_num_rows($res)>0){
        $output = '<option value="0" class="dropdown-item" selected>Selsect  Product</option>';
        while($dis=mysqli_fetch_array($res)){
            $id = clear($dis['id']);
            $name = clear($dis['name']);
            $price = " => Price -> ".clear($dis['price']);
            $output .= <<<html
                <option value="$id">$name$price</option>
            html;
        }
            echo $output;
    }
}


?>