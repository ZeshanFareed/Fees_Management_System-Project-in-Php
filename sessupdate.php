<?php

include('db.php');

$id = $_POST['id'];

$session = $_POST['sessName'];
$status = $_POST['status'];
$startdate = $_POST['strtdate'];

$qry = "UPDATE session SET sesName='$session', status='$status', startdate='$startdate' WHERE id='$id'";
$result = $conn->query($qry);

if($result)
{
    header("location: sessview.php");
}

else
{
    echo "Updation failed";
}

$conn->close();

?>