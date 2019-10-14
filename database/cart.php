<?php

function ret_var($table,$target,$value,$db){
    mysqli_query($db,"SELECT $value FROM $table WHERE name='$target'");
}

// function add_cart($item){
//     $db = $db = mysqli_connect("localhost:3306","server01","memes","death");
//     $ret = mysqli_query($db,"SELECT item, quantity FROM cart");
//     if (mysqli_num_rows($ret) > 0){
//         echo "items in cart";
//     }
//     else{
//         mysqli_query
//     mysqli_query($db,"")
// }

add_cart("waifu");
?>