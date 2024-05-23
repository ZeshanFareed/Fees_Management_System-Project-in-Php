<?php

include("db.php");


$id = $_GET['id'];


$sql = "SELECT * FROM extradues WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) 
{
  header('Location: exduesview.php');
}

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra Dues Generate</title>
    <!-- Add your custom styles here -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('img/ex.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            backdrop-filter:blur(5px);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: yellow;
            margin-top: 80px;
        }

        label {
            display:flex;
            margin: 10px 0 5px;
            color: black;
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
            background-color: yellow;
        }

        @media only screen and (min-width: 600px) {
            form {
                max-width: 600px;
            }
        }
    </style>
</head>
<body>

    <form action="exduesupdate.php" method="post">
        <h2>Extra Dues Update Generate Form</h2>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="form-group">
            <label for="regno">Registeration No</label>
            <input type="text" id="regno" name="regno" value="<?php echo $row['regno']; ?>">
        </div>

            <div class="form-group">
                <label for="session">Session</label>
                <input type="text" id="session" name="session" value="<?php echo $row['session']; ?>">
            </div>

            <div class="form-group">
                <label for="depart">Department</label>
                <input type="text" id="depart" name="depart" value="<?php echo $row['departmt']; ?>">
            </div>

            <div class="form-group">
                <label for="section">Section</label>
                <input type="text" id="section" name="section" value="<?php echo $row['section']; ?>">
            </div>

        
        <div class="form-group">
            <label for="month">Month</label>
              <input type="text" id="month" name="month" value="<?php echo $row['month']; ?>">
        </div>
        
           <div class="form-group">
              <label for="type">Fee Type</label>
                 <input type="text" id="type" name="type" value="<?php echo $row['type']; ?>">
           </div>

        <div class="form-group">
           <label for="totalfee">Total Fee</label>
           <input type="number" id="totalfee" name="totalfee" value="<?php echo $row['totalfee']; ?>">
        </div>

        <button type="submit">Update</button>

    </form>
</body>
</html>
