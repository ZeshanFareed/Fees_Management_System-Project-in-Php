<?php

include("db.php");


$id = $_GET['id'];

$sql = "SELECT * FROM deposit WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) 
{
  header('Location: depositview.php');
}

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit form</title>
    <!-- Add your custom styles here -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('img/dpst.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 140vh;
        }

        form {
            backdrop-filter:blur(8px);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 120%;
            max-width: 400px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: yellow;
            margin-top: 100px;
        }

        label {
            display:flex;
            margin: 10px 0 5px;
            color: white;
            font-size: large;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: aqua;
            color: black;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: red;
        }

        @media only screen and (min-width: 600px) {
            form {
                max-width: 600px;
            }
        }
    </style>

</head>
<body>
     <form action="depositupdate.php" method="post">
        <h2>Update Deposit Fee Form</h2>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="form-group">
                <label for="regno">Registeration No</label>
                <input id="regno" name="regno" value="<?php echo $row['rollno']; ?>">
        </div>

        <div class="form-group">
                <label for="session">Session</label>
                <input id="session" name="session" value="<?php echo $row['session']; ?>">
            </div>
            
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" id="department" name="department" value="<?php echo $row['depart']; ?>">
            </div>

        <div class="form-group">
                <label for="section">Section</label>
                <input type="text" id="section" name="section" value="<?php echo $row['section']; ?>">
            </div>

        
        <div class="form-group">
            <label for="month">Month:</label>
              <input type="text" id="month" name="month" value="<?php echo $row['month']; ?>">
        </div>
        
        <div class="form-group">
            <label for="year">Enter Year:</label>
            <input type="text" id="year" name="year" placeholder="Hint:2023"  value="<?php echo $row['year']; ?>">
        </div>

        <div class="form-group">
              <label for="typefee">Fee Type</label>
                 <input type="text" id="typefee" name="typefee" value="<?php echo $row['feetype']; ?>">
           </div>

        <div class="form-group">
            <label for="smsfee">Enter Amount:</label>
            <input type="number" id="smsfee" name="smsfee" value="<?php echo $row['smsfee']; ?>">
        </div>

        <div class="form-group">
            <label for="balance">Balance:</label>
            <input type="balance" id="balance" name="balance" value="<?php echo $row['balance']; ?>">
        </div>
        
        <button type="submit">Update</button>
    </form>

</body>
</html>

<?php

$conn->close();

?>
