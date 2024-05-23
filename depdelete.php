<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM department WHERE id='$id'";
$result=$conn->query($sql);

if($result){
header("Location: depview.php");
}

else{
    echo "Delection Failed";
}

$conn->close();

?>
