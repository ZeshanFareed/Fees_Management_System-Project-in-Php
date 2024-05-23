<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM GenerateFee WHERE id='$id'";
$result=$conn->query($sql);

if($result){

header("Location:pendinggendues.php");

}

else{
    echo "Delection Failed";
}

$conn->close();

?>
