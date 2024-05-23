<?php

include("db.php");

$id = $_POST['id'];

$regnumber=$_POST['regno'];
$session= $_POST['session'];
$depart= $_POST['depart'];
$section= $_POST['section'];
$month= $_POST['month'];
$year= $_POST['year'];
$reason= $_POST['reason'];

$sql = "UPDATE fine SET rollno='$regnumber' , session='$session' , department='$depart' , section='$section' , month='$month' , year='$year' , reason='$reason' WHERE id='$id'";
$result=$conn->query($sql);

if($result)
{
  header('location: fineview.php');
}
else
{
echo "Registration Faild".$conn->error;
}

$conn->close();

?> 