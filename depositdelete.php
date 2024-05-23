<?php

include('db.php');

$id = $_GET['id'];

$sql = "DELETE FROM deposit WHERE id='$id'";
$result=$conn->query($sql);

if($result)
{
header("Location:depositview.php");
}

else{
    echo "Delection Failed";
}

$conn->close();

?>