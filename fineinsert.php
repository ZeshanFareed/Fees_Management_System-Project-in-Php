<?php

include("db.php");

$regnumber=$_POST['regno'];
$session= $_POST['session'];
$depart= $_POST['depart'];
$section= $_POST['section'];
$month= $_POST['month'];
$year= $_POST['year'];
$reason= $_POST['reason'];

$sql =  "INSERT INTO fine(rollno, session, department, section, month, year, reason) VALUE('$regnumber','$session','$depart','$section','$month','$year','$reason')";
$reslt = $conn->query($sql);

if($reslt)
{
  header('location: fineview.php');
}
else
{
echo "Registration Faild".$conn->error;
}

$conn->close();

?> 