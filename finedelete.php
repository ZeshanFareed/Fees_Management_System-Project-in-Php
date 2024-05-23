<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM fine WHERE id='$id'";
$result=$conn->query($sql);

if($result){

header("Location:fineview.php");

}

else{
    echo "Delection Failed";
}

$conn->close();

?>
