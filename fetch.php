<?php
//include_once '../config/connect.php'
include '../config/connection-with-rwtq.php';
include "../product.php";

try{ 

$stmt =  $db->query("SELECT * FROM chart_data");
//while  ($row = $stmt->fetch(PDO::FETCH_NUM)){
while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//while  ($row = $stmt->fetch(PDO::FETCH_BOTH)){
var_dump($db);     
var_dump($row);
echo "<pre>".var_dump($row)."</pre>";
  echo htmlentities($row['name'])." ".htmlentities($row['description'])." ".htmlentities($row['price'])." "."<br>";
 }
 
}
catch(exeption $e){
 echo "error: ".$e	;
}
 
?>