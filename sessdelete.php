<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM session WHERE id='$id'";
$result=$conn->query($sql);

if($result)
{
    header("Location:sessview.php");
}
else
{
   echo 'Deletion Failed';
}

$conn->close();

?>