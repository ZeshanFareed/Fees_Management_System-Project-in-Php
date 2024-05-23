<?php

include('db.php');

$id = $_GET['id'];

$sql = "DELETE FROM extradues WHERE id='$id'";
$result=$conn->query($sql);

if($result)
{
header("Location:exduesview.php");
}

else
{
    echo "Delection Failed";
}

$conn->close();

?>