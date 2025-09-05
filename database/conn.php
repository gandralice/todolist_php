<?php

$hostname = 'localhost';
$db = 'to_do';
$username = 'postgres';
$password = 'senha';

try{
  $pdo = new PDO("pgsql:host=$hostname;dbname=$db", $username, $password);
} catch (PDOException $e){
  echo"erro: " . $e->getMessage();
}