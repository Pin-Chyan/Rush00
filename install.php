<?php
include "./database/store_func.php";
include "./database/users.php";
$host = "localhost:3306";
$s01 = new mysqli($host,"server01","memes");

mysqli_query($s01,"DROP DATABASE death");
mysqli_query($s01,"CREATE DATABASE death");

$db = mysqli_connect($host,"server01","memes","death");

$id = "id INT(6)";
$name = "names BLOB";
mysqli_query($db,"CREATE TABLE blobs ($id,$name)");

//store table
$product = "product TEXT(200)";
$id = "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
$category = "category TEXT(200)";
$price = "price INT(20)";
$img = "img TEXT(50)";
mysqli_query($db,"CREATE TABLE store ($product,$id,$category,$price,$img)");
//defaults
product_add("Toradora","Romantic,Comedy,Anime","200","toradora.jpg");
product_add("Vinland saga","Action,Adventure,Anime","120","n\a");
product_add("How not to summon a demon lord","Isekai,Comedy,Fantasy,Anime","175","n\a");
product_add("Beyond the boundary","Romantic,Action,Anime","185","n\a");
product_add("Violet evergarden","Romantic,Tragedy,Anime","195","n\a");
product_add("Shield Hero","Adventure,Isekai,Action,Manga","175","n\a");
product_add("Konosuba","Adventure,Isekai,Comedy,Anime","140","n\a");
product_add("Kimetsu No Yaiba","Adventure,Action,Manga","140","n\a");
//store created

//user table
$username = "username TEXT(50)";
$name = "name TEXT(50)";
$surname = "surname TEXT(50)";
$address = "address TEXT(50)";
$number = "contact TEXT(10)";
$email = "email TEXT(50)";
$password = "password TEXT(50000)";
$admin = "overlord TEXT(5)";
mysqli_query($db,"CREATE TABLE users ($username,$name,$surname,$address,$number,$email,$password,$admin)");
//defaults
user_add("WingarKorin","Heini","Barnard","Knowhere","0987654321","hbarnardWTC@yeet.com",hash("sha1","inverse"),"yes");
user_add("waifu","asuna","yuuki","aincrad floor 77","1234567890","asunayuuki@swordart.com",hash("sha1","iheartkirito"),"no");
user_add("apex","p","c","N/a","1234567890","PC@csgo.com",hash("sha1","waifuisjanedearcfromfate"),"yes");
user_add("cyko","liam","krie","kuilsriver","1234567890","CYKO@backend.com",hash("sha1","ilikewaifusocks"),"yes");
user_add("banana","hand","ofbananas","tree 47 branch 9","1234567890","banana@outsideonabranch.com",hash("sha1","haha"),"yes");
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
$quan = "quantity INT(10)";
$price = "price INT(10)";
mysqli_query($db,"CREATE TABLE cart ($user,$item,$quan,$price)");
mysqli_close($db);
mysqli_close($s01);

//Category database
?>