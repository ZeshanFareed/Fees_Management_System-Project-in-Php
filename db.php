<?php

$conn = new mysqli('localhost', 'root', '', 'fee_management');

if ($conn->connect_error) 
{
  die('Database connection failed:' . $conn->connect_error);
}

?>

