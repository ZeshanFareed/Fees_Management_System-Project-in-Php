<?php

include("db.php");

$id = $_GET['id'];


$sql = "SELECT * FROM register WHERE id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows == 0) {
  header('Location: stdlist.php');
  exit;
}


$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/regi.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            backdrop-filter: blur(10px);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: white;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            
        }

        .form-group {
            width: 100%;
            margin: 10px 0;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="password"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background: red;
            color: #fff;
            padding: 10px 15px;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
            width: 600px;
            
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="post" action="regupdate.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="form-group">
                <label for="regno">Registration Number:</label>
                <input type="text" id="regno" name="regno" value="<?php echo $row['regno']; ?>">
            </div>

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
            </div>

            <div class="form-group">
                <label for="fname">Father's Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $row['fname']; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>">
            </div>

            <div class="form-group">
                <label for="DOB">Date of Birth (MM/DD/YYYY):</label>
                <input type="date" id="DOB" name="DOB" value="<?php echo $row['DOB']; ?>">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">
            </div>

            <div class="form-group">
                <label for="admidate">Admission Date (MM/DD/YYYY):</label>
                <input type="date" id="admidate" name="admidate" value="<?php echo $row['admidate']; ?>">
            </div>

            <div class="form-group">
                <label for="cellno">Cell Number:</label>
                <input type="tel" id="cellno" name="cellno" value="<?php echo $row['cellno']; ?>">
            </div>

            <div class="form-group">
                <label for="depart">Department:</label>
                <input type="text" id="department" name="department" value="<?php echo $row['department']; ?>">
            </div>

            <div class="form-group">
                <label for="session">Session (e.g., 2023-2024):</label>
                <input type="text" id="session" name="session" value="<?php echo $row['session']; ?>">
            </div>

            <div class="form-group">
                <label for="section">Section:</label>
                <input type="text" id="section" name="section" value="<?php echo $row['section']; ?>">
            </div>

            <div class="form-group">
                <label for="Tution">Tution Fee:</label>
                <input type="text" id="tutionfee" name="tutionfee" value="<?php echo $row['tutionfee']; ?>">
            </div>

            <div class="form-group">
                <input type="submit" id="submit" name="submit" value="Update">
            </div>
        </form>
    </div>

</body>
</html>

<?php

// Close the database connection
$conn->close();

?>
