<?php
$servername = "172.18.0.1";
$username = "devuser";
$password = "devpass";

try 
{
  $conn = new PDO("mysql:host=$servername;port=9000;dbname=test_db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; 
}
catch (PDOException $e) 
{
    echo 'Error: ' . $e->getMessage();
    exit();
}
