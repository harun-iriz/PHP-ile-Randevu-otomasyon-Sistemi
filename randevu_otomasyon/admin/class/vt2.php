<?php

$sunucu="localhost";
$user="";
$password="";
$dbname="yonetimpaneli";

try{
    $db=new PDO("mysql:host=".$sunucu.";dbname=".$dbname.";charset=utf8",$user,$password);
}catch(PDOException $error){
    echo $error->getMessage();
    exit();
}

?>
