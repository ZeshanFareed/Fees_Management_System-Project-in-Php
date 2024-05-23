<?php

include("db.php");

$sessionName=$_POST['sesName'];
$departFee= $_POST['depName'];
$sectionName= $_POST['secName'];
$month= $_POST['month'];
$year= $_POST['year'];
$submidate= $_POST['subdate'];
$duedate= $_POST['duedate'];
$bank= $_POST['bank'];
$accountno= $_POST['accno'];
$semesterfee= $_POST['semesterfee'];
$typefee= $_POST['type'];


$sql =  "INSERT INTO GenerateFee(sesName,depName,secName,month,year,subdate,duedate,bank,accno,smsfee,typefee) VALUE('$sessionName','$departFee','$sectionName','$month','$year','$submidate','$duedate','$bank','$accountno','$semesterfee','$typefee')";
$reslt = $conn->query($sql);


if($reslt)
{
  header('location: pendinggendues.php');
}
else
{
echo "Registration Faild".$conn->error;
}

$conn->close();

?> 