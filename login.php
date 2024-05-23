<?php

include('db.php');

if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header('location: dashboard.php');
        exit();
    } else {
        echo "<p>Email or Password Incorrect, Please Try Again</p>";
    }

    $conn->close();
}

?>
