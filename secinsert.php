<?php

include("db.php");

if(isset($_POST['submit'])) {

$sectionname=$_POST['sectionName'];
$capacity = $_POST['stdcapacity'];
$date = $_POST['creationDate'];

$sql =  "INSERT INTO section(sectionName, stdcapacity, creationDate) VALUE('$sectionname','$capacity' , '$date')";
$reslt = $conn->query($sql);


if($reslt)
{
  header('location: secview.php');
}
else
{
echo "Registration Faild".$conn->error;
}

$conn->close();

}

?> 