<?php

include("db.php");

if(isset($_POST['submit']))
{
$departmentName =$_POST['depName'];
$semesterFee = $_POST['semesterFee'];


$sql = "INSERT INTO department(depName, semesterFee) VALUE('$departmentName ','$semesterFee')";
$reslt = $conn->query($sql);


if($reslt)
{
  header('location: depview.php');
}
else
{
echo "Registration Faild".$conn->error;
}

$conn->close();

}

?> 