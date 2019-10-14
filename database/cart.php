<?php

function ret_var($item,$value,$db){
    $res = mysqli_query($db,"SELECT $value FROM store WHERE product='$item'");
    $res2 = mysqli_fetch_array($res);
    return ($res2[$value]);
}

function add_cart($item){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $ret = mysqli_query($db,"SELECT item, quantity FROM cart");
    $not_in = 0;
    if (mysqli_num_rows($ret) > 0){
        while (($arr = mysqli_fetch_array($ret))){
            if ($arr['item'] == $item){
                mysqli_query($db,"UPDATE cart SET quantity = quantity + 1 WHERE item='$item'");
                $not_in = 1;
            }
        }
    }
    if ($not_in == 0){
        $price = ret_var($item,"price",$db);
        mysqli_query($db,"INSERT INTO cart (user,item,quantity,price) VALUES ('login','$item','1','$price')");
    }
    mysqli_close($db);
}

// function del_cart($item){
//     $db = mysqli_connect("localhost:3306","server01","memes","death");
//     $ret = mysqli_query($db,"SELECT item, quantity FROM cart");
//     $not_in = 0;
//     if (mysqli_num_rows($ret) > 0){
//         while (($arr = mysqli_fetch_array($ret))){
//             if ($arr['item'] == $item && $arr['quantity'] > 1){
//                 mysqli_query($db,"UPDATE cart SET quantity = quantity - 1 WHERE item='$item'");
//             }
//             else if ($arr['item'] == $item && $arr['quantity'] <= 1){
//                 mysqli_query($db,"DELETE FROM cart WHERE item='$item'");
//             }
//         }
//     }
//     mysqli_close($db); 
// }

function checkout_cart(){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $ret = mysqli_query($db,"SELECT item, quantity, price FROM cart WHERE user='login'");
    if (mysqli_num_rows($ret) > 0){
        $items = "(";
        $total = 0;
        while (($arr = mysqli_fetch_array($ret))){
            $item = $arr['item'];
            $price = $arr['price'];
            $quan = $arr['quantity'];
            $items .= $item;
            $items .= "=";
            $items .= $quan;
            $items .= " ";
            $total += $price;
            mysqli_query($db,"DELETE FROM cart WHERE item='$item'");
        }
        $items .= $total.")";
        mysqli_query($db,"INSERT INTO history (user,items) VALUES ('login','$items')");
    }
    mysqli_close($db);
} 
?>