<?php

include('db.php');

$id = $_POST['id'];

$registerNo = $_POST['regno'];
$sessionName = $_POST['session'];
$departmentName = $_POST['department'];
$section = $_POST['section'];
$month = $_POST['month'];
$year = $_POST['year'];
$typefee = $_POST['typefee'];
$totalamount = $_POST['smsfee'];
$balance = $_POST['balance'];

$qry = "UPDATE deposit SET rollno='$registerNo', session='$sessionName', depart='$departmentName ', section='$section ', month='$month', year='$year', feetype='$typefee', smsfee='$totalamount', balance='$balance' WHERE id='$id'";
$result = $conn->query($qry);

if($result)
{
    header("location:depositview.php");
}

else
{
    echo "Updation failed";
}

$conn->close();

?>