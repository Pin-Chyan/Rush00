<?php
    function blobs_add($id,$images,$price,$disc) {
        $db = mysqli_connect("localhost:3306","server01","memes","death");
        mysqli_query($db, "INSERT INTO blobs (id,images,price,disc) VALUES ('$id','$images','$price','$disc')");
        mysqli_close($db);
    }

    function blobs_del($id) {
        $db = mysqli_connect("localhost:3306","server01","memes","death");
    }
?>