<?php
function product_add($name,$cats,$price){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"INSERT INTO store (product,category,price) VALUES ('$name','$cats','$price')");
    mysqli_close($db);
}

function get_specfic($f_tag,$table,$value,$l_tag){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $retrieved = mysqli_query($db,"SELECT * FROM $table");
    while (($arr = mysqli_fetch_array($retrieved))){
        echo $f_tag;
        echo $got = $arr[$value];
        echo $l_tag."\n";
    }
    mysqli_close($db);
}
?>