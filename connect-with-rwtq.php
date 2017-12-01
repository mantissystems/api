<?php
 
try{
$db = new PDO('mysql:host=localhost;dbname=ppsk333954_rwtq;charset=utf8','ppsk333954','JPiQ8vqcCh'); 
var_dump($db);
 
 }
 catch(Exeption $e){
//echo $e;
echo "An error has occurred";

 }
?>