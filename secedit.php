<?php

include("db.php");


$id = $_GET['id'];


$sql = "SELECT * FROM section WHERE id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows == 0) {
  header('Location: secview.php');
  exit;
}


$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('img/bag.jpeg');
        }

        .container {
            max-width: 520px;
            margin: 20px auto;
            padding: 30px;
            backdrop-filter: blur(10px);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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
            margin-top: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
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
            margin-left: 50px;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
            width: 400px;
            margin-top: 20px;
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
        <h2>Section Registration Form</h2>
        <form method="post" action="secupdate.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="form-group">
                <label for="sectionName">Section Name:</label>
                <input type="text" id="sectionName" name="sectionName" value="<?php echo $row['sectionName']; ?>">
            </div>

            <div class="form-group">
                <label for="capacity">Student Capacity:</label>
                <input type="text" id="stdcapacity" name="stdcapacity" value="<?php echo $row['stdcapacity']; ?>">
            </div>

            <div class="form-group">
                <label for="creationDate">Creation Date:</label>
                <input type="date" id="creationDate" name="creationDate" value="<?php echo $row['creationDate']; ?>">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>

<?php

// Close the database connection
$conn->close();

?>