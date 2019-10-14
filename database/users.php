<?php
function user_add($username,$name,$surname,$address,$number,$email,$password,$admin){
    if (($db = mysqli_connect("localhost:3306","server01","memes","death")))
    $part1 = "(username,name,surname,address,contact,email,password,admin)";
    $part2 = "('$username','$name','$surname','$address','$number','$email','$password','$admin')";
    mysqli_query($db,"INSERT INTO users $part1 VALUES $part2");
    mysqli_close($db);
}
function user_del($username){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"DELETE FROM users WHERE username = '$username'");
    mysqli_close($db);
}
function user_edit($username,$target,$value){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    mysqli_query($db,"UPDATE users SET $target='$value' WHERE username='$username'");
    mysqli_close($db);
}
function get_val($username,$value){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $ret = mysqli_query($db,"SELECT $value FROM users WHERE username='$username'");
    $ret2 = mysqli_fetch_array($ret);
    echo $ret2[$value];
    mysqli_close($db);
}
function if_registered($username){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $ret = mysqli_query($db,"SELECT username FROM users");
    while(($ret2 = mysqli_fetch_array($ret))){
        if ($ret2['username'] == $username){
            mysqli_close($db);
            return(1);
        }
    }
    mysqli_close($db);
    return(0);
}
function user_pass($username,$hased_pass){
    $db = mysqli_connect("localhost:3306","server01","memes","death");
    $ret = mysqli_query($db,"SELECT password FROM users WHERE username='$username'");
    $arr = mysqli_fetch_array($ret);
    if ($arr['password'] == $hased_pass){
        mysqli_close($db);
        return (1);
    }
    mysqli_close($db);
    return (0);
}
?>