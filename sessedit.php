<?php

include("db.php");

$id = $_GET['id'];


$sql = "SELECT * FROM session WHERE id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows == 0) {
  header('Location: sessview.php');
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
        <h2>Session Update Form</h2>
        <form method="post" action="sessupdate.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">


            <div class="form-group">
                <label for="sessName">Session Name:</label>
                <input type="text" id="sessName" name="sessName" value="<?php echo $row['sesName']; ?>">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" value="<?php echo $row['status']; ?>">
            </div>

            <div class="form-group">
                <label for="strtdate">Start Date:</label>
                <input type="text" id="strtdate" name="strtdate" value="<?php echo $row['startdate']; ?>">
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
