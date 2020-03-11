<?php
function table_del($table,$id,$target){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"DELETE FROM $table WHERE $id=$target");
    mysqli_close($db);
}

function get_specfic($f_tag,$table,$value,$l_tag,$user){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $retrieved = mysqli_query($db,"SELECT * FROM $table");
    while (($arr = mysqli_fetch_array($retrieved))){
        if ($arr['username'] == $user){
            echo $f_tag;
            echo $arr[$value];
            echo $l_tag;
        }
    }
    mysqli_close($db);
}
?>