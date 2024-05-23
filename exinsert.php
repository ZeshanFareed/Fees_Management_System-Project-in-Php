<?php

include("db.php");

$regnumber=$_POST['regno'];
$session= $_POST['session'];
$depart= $_POST['depart'];
$section= $_POST['section'];
$month= $_POST['month'];
$typeFee= $_POST['type'];
$totalFee= $_POST['totalfee'];

$sql =  "INSERT INTO extradues(regno, session, departmt, section, month, type, totalfee) VALUE('$regnumber','$session','$depart','$section','$month','$typeFee','$totalFee')";
$reslt = $conn->query($sql);


if($reslt)
{
  header('location: exduesview.php');
}
else
{
echo "Registration Faild".$conn->error;
}

$conn->close();

?> 