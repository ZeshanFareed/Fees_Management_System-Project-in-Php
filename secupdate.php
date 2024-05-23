<?php

include("db.php");

$id = $_POST['id'];

$sectionname=$_POST['sectionName'];
$capacity = $_POST['stdcapacity'];
$date = $_POST['creationDate'];


$sql = "UPDATE section SET sectionName='$sectionname' , stdcapacity='$capacity' , creationDate='$date' WHERE id='$id'";
$result=$conn->query($sql);

if($result){
    header('Location: secview.php');
}
else{
    echo 'Updation Failed';
}

$conn->close();

?>