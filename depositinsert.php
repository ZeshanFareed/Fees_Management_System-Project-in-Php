<?php

 include("db.php");


 $registerNo = $_POST['regno'];
 $sessionName = $_POST['session'];
 $departmentName = $_POST['department'];
 $registerNo = $_POST['section'];
 $month = $_POST['month'];
 $year = $_POST['year'];
 $typefee = $_POST['typefee'];
 $totalamount = $_POST['smsfee'];
 $balance = $_POST['balance'];
 
 $qry = "INSERT INTO deposit(rollno, session, depart, section, month, year, feetype, smsfee, balance)VALUES('$registerNo','$sessionName','$departmentName','$registerNo','$month','$year','$typefee','$totalamount','$balance')";
 $result = $conn->query($qry);

 if($result)
 {
    header("location: depositview.php");
 }
 else
{
    echo "Registration Faild".$conn->error;
}

$conn->close();

?> 

