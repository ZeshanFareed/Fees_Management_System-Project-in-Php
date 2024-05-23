<?php

include("db.php");

if (isset($_POST['submit'])) {

    $regnumber = $_POST['regno'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $DateBirth = $_POST['DOB'];
    $address = $_POST['address'];
    $admissiondate = $_POST['admidate'];
    $phnumber = $_POST['cellno'];
    $depart = $_POST['department'];
    $session = $_POST['session'];
    $section = $_POST['section'];
    $tutionfee = $_POST['tutionfee'];

    // Check if email already exists
    $sql = "SELECT * FROM register WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<p>Email already exists. Please choose a different one.</p>";
        exit();
    }

    $sql = "INSERT INTO register(regno, name, fname, email, password, DOB, address, admidate, cellno, department, session, section, tutionfee) VALUES('$regnumber','$name' , '$fname' , '$email', '$password' , '$DateBirth' , '$address','$admissiondate','$phnumber','$depart','$session','$section','$tutionfee')";
    $reslt = $conn->query($sql);

    if ($reslt) 
    {
        header('location: stdlist.php');
    }
    else
    {
        echo "Registration Faild" . $conn->error;
    }

    $conn->close();
}

?>
