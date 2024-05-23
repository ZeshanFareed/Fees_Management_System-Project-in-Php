<?php

include("db.php");


$id = $_POST['id'];
$regnumber=$_POST['regno'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$DateBirth = $_POST['DOB'];
$address = $_POST['address'];
$admissiondate = $_POST['admidate'];
$phnumber = $_POST['cellno'];
$depart = $_POST['department'];
$session = $_POST['session'];
$section = $_POST['section'];
$tutionfee = $_POST['tutionfee'];


$sql = "UPDATE register SET regno='$regnumber', name='$name', fname='$fname' , email='$email' , password='$password' , DOB='$DateBirth' , address='$address' , admidate='$admissiondate' , cellno='$phnumber' , department='$depart' , session='$session' , section='$section' , tutionfee='$tutionfee' WHERE id='$id'";
$result = $conn->query($sql);

if($result){
    header('Location: stdlist.php');
}
else{
    echo 'Updation Failed';
}

$conn->close();

?>
