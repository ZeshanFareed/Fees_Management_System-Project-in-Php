<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM register WHERE id='$id'";
$result = $conn->query($sql);

if($result)
{
    header("Location:stdlist.php");
}
else
{
   echo 'Deletion Failed';
}

$conn->close();

?>