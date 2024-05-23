<?php

include('db.php');

if (isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmpass'];

if ($confirmPassword !== $password) 
{
    echo "Passwords do not match. Please try again.";
    exit();
}

// Check if email already exists
$sql = "SELECT * FROM user WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "Email already exists. Please choose a different one.";
    exit();
}

$sql = "INSERT INTO user(email, password, confirmpass) VALUES('$email', '$password', '$confirmPassword')";
$reslt = $conn->query($sql);

if ($reslt) 
{
    header('location: index.php');
}
else 
{
    echo "Registration Faild" . $conn->error;
}

$conn->close();
}
?>