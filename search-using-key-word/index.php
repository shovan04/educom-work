<?php
include './src/nav.html';
$url = $_SERVER['REQUEST_URI'];
$url = str_replace('/educom-work/search-using-key-word/','',$url);
$arr = explode('/',$url);
$id = '';
if(isset($arr['1'])){
    $id = $arr['1'];
}
if($url == "" || $url == "home"){
    include './src/index.html';
} elseif($url == "add-item" || preg_match('/add-item\/[0-9]/i',$url)){
    include './src/addItem.html';
}
elseif($url == "sell-product" || preg_match('/sell-product\/[0-9]/i',$url)){
    include './src/sellProduct.html';
}
elseif($url == "update-product" || preg_match('/update-product\/[0-9]/i',$url)){
    include './src/updateProduct.html';
}
else{
    include './src/index.html';
}