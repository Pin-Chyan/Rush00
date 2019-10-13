<?php
include "store_func.php";
$host = "localhost:3306";
$s01 = new mysqli($host,"server01","memes");

mysqli_query($s01,"DROP DATABASE death");
mysqli_query($s01,"CREATE DATABASE death");

$db = mysqli_connect($host,"server01","memes","death");

//$id = "id INT(6)";
//$name = "names TEXT(30)";
//mysqli_query($db,"CREATE TABLE names ($id,$name)");

//store table
$product = "product TEXT(200)";
$category = "category TEXT(200)";
$price = "price INT(10)";
mysqli_query($db,"CREATE TABLE store ($product,$category,$price)");
//store created

//user table
$name = "name TEXT(50)";
$surname = "surname TEXT(50)";
$username = "username TEXT(50)";
$address = "address TEXT(50)";
$number = "contact TEXT(10)";
$email = "email TEXT(50)";
$password = "password TEXT(50)";
mysqli_query($db,"CREATE TABLE users ($username,$name,$surname,$address,$number,$email,$password)");
//user table created

//History Pay
$date = "date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";
$user = "user TEXT(50)";
$items = "items TEXT(800)";
mysqli_query($db,"CREATE TABLE history ($date,$user,$items)");
//history table created

//cart
$user = "user TEXT(30)";
$item = "item TEXT(30)";
$price = "price INT(10)";
mysqli_query($db,"CREATE TABLE cart ($user,$item,$price)");
mysqli_close($db);
mysqli_close($s01);
product_add("waifu","kawaii,red eyes,tights,long hair","6000");
product_add("waifu","kawaii,blue eyes,big tiddies,short hair","9000");
product_add("waifu","hotafuckingfire,red eyes,katana,long hair","60000");
product_add("waifu","kawaii,red eyes,tights,long hair","6000");
?>