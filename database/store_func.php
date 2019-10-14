<?php
// $db = mysqli_connect("localhost:3306","server01","memes","death");
// mysqli_close($db);
function product_add($name,$cats,$price,$img){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"INSERT INTO store (product,category,price,img) VALUES ('$name','$cats','$price','$img')");
    mysqli_close($db);
}
function product_del($name){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"DELETE FROM store WHERE product='$name'");
    mysqli_close($db);
}
function product_edit($name,$target,$value){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"UPDATE store SET $target='$value' WHERE product='$name'");
    mysqli_close($db);
}
function product_ret($product,$target){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $res = mysqli_query($db,"SELECT $target FROM store WHERE product='$product'");
    $res2 = mysqli_fetch_array($res);
    if ($target == 'img')
        echo "$res2[target]";
    echo $res2[$target];
    echo"\n";
}
?>