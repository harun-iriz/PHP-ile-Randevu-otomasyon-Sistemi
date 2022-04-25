<?php

$sunucu="localhost";
$user="haruniriz";
$password="harunrandevu123!";
$dbname="yonetimpaneli";

try{
    $db=new PDO("mysql:host=".$sunucu.";dbname=".$dbname.";charset=utf8",$user,$password);
}catch(PDOException $error){
    echo $error->getMessage();
    exit();
}

?>