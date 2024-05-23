<?php

include('db.php');

$id = $_POST['id'];

$regnumber=$_POST['regno'];
$session= $_POST['session'];
$depart= $_POST['depart'];
$section= $_POST['section'];
$month= $_POST['month'];
$typeFee= $_POST['type'];
$totalFee= $_POST['totalfee'];

$qry = "UPDATE extradues SET regno='$regnumber', session='$session', departmt='$depart ', section='$section ', month='$month', type='$typeFee', totalfee='$totalFee' WHERE id='$id'";
$result = $conn->query($qry);

if($result)
{
    header("location:exduesview.php");
}

else
{
    echo "Updation failed";
}

$conn->close();

?>