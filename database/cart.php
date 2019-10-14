<?php

function ret_var($item,$value){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $res = mysqli_query($db,"SELECT $value FROM store WHERE product='$item'");
    $res2 = mysqli_fetch_array($res);
    mysqli_close($db);
    return ($res2[$value]);
}

function add_cart($item){
    $db = $db = mysqli_connect("localhost:3306","server01","memes","death");
    $ret = mysqli_query($db,"SELECT item, quantity FROM cart");
    if (mysqli_num_rows($ret) > 0){
        echo "items in cart";
    }
    else{
        $price = ret_var("waifu","price");
        mysqli_query($db,"INSERT INTO cart (user,item,quantity,price) VALUES ('login','$item','1','$quantity')");
    }
}

add_cart("waifu");
?>