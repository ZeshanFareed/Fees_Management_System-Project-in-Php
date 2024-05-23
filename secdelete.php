<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM section WHERE id='$id'";
$result=$conn->query($sql);

if($result)
{
    header("Location:secview.php");
}
else
{
   echo 'Deletion Failed';
}

$conn->close();

?>