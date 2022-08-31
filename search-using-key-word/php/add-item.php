<?php
include './dbcon.php';
if(isset($_POST['st'])){
    $sql = "INSERT INTO `search-using-key-word`(`name`, `price`, `stock`) VALUES ('".clear($_POST['name'])."','".clear($_POST['price'])."','".clear($_POST['stock'])."')";
    $res = mysqli_query($conn,$sql);
    !$res ?  $msg = 'Failed to upload' : $msg = 'Success';
    echo $msg;
}

?>