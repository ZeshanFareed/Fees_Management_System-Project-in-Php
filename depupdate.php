<?php

include("db.php");


$id = $_POST['id'];
$departmentName = $_POST['depName'];
$semesterFee = $_POST['semesterFee'];

$sql = "UPDATE department SET depName='$departmentName' , semesterFee='$semesterFee' WHERE id='$id'";
$result=$conn->query($sql);

if($result)
{
    header("location: depview.php");
}
else{
    echo "Updation failed";
}

$conn->close();

?>