<?php

include("db.php");

if(isset($_POST['sub'])) {

$sessionname=$_POST['sesName'];
$status = $_POST['status'];
$date = $_POST['startdate'];

$sql =  "INSERT INTO session(sesName, status, startdate) VALUE('$sessionname','$status' , '$date')";
$result = $conn->query($sql);


if($result)
{
  header('location: sessview.php');
}
else
{
echo "Registration Faild".$conn->error;
}

$conn->close();
}

?> 