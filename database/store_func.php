<?php
// $db = mysqli_connect("localhost:3306","server01","memes","death");
// mysqli_close($db);
function product_add($name,$cats,$price){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"INSERT INTO store (product,category,price) VALUES ('$name','$cats','$price')");
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
?>