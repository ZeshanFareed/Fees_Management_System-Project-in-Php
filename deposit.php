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
            height: 100vh;
        }

        form {
            backdrop-filter:blur(8px);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 1300px;
            box-sizing: border-box;
            margin-top: 180px;
        }

        h2 {
            text-align: center;
            color: yellow;
            margin-top: 80px;
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
            background-color:chartreuse;
        }

        @media only screen and (min-width: 600px) {
            form {
                max-width: 600px;
            }
        }
    </style>


</head>
<body>
     <form action="depositinsert.php" method="post">
        <h2>Deposit Fee Form</h2>

        <div class="form-group">
                <label for="regno">Registeration No</label>
                <select id="regno" name="regno" required>
                    <option value="">Choose REG.Number</option>
                    
                    <?php

                    // Connect to your MySQL database
                    include("db.php");

                    $sql = "SELECT DISTINCT regno FROM register";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['regno'] . "'>" . $row['regno'] . "</option>";
                        }
                    }

                    $conn->close();
                    ?>
                </select>
        </div>

        <div class="form-group">
                <label for="session">Session</label>
                <select id="session" name="session" required>
                    <option value="">Choose Session</option>
                    
                    <?php

                    // Connect to your MySQL database
                    include("db.php");

                    $sql = "SELECT DISTINCT sesName FROM session";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['sesName'] . "'>" . $row['sesName'] . "</option>";
                        }
                    }

                    $conn->close();
                    ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option value="">Choose Department</option>
                    
                    <?php

                    // Connect to your MySQL database
                    include("db.php");

                    $sql = "SELECT DISTINCT depName FROM department";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['depName'] . "'>" . $row['depName'] . "</option>";
                        }
                    }

                    $conn->close();

                    ?>
                </select>
            </div>

        <div class="form-group">
                <label for="section">Section</label>
                <select id="section" name="section" required>
                    <option value="">Choose Section</option>
                    
                    <?php

                    // Connect to your MySQL database
                    include("db.php");

                    $sql = "SELECT DISTINCT sectionName FROM section";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['sectionName'] . "'>" . $row['sectionName'] . "</option>";
                        }
                    }

                    $conn->close();
                    ?>
                </select>
            </div>

        
        <div class="form-group">
            <label for="month">Month:</label>
              <select id="month" name="month" required>
                 <option value="">Choose Month</option>
                 <option value="01">January</option>
                 <option value="02">February</option>
                 <option value="03">March</option>
                 <option value="04">April</option>
                 <option value="05">May</option>
                 <option value="06">June</option>
                 <option value="07">July</option>
                 <option value="08">August</option>
                 <option value="09">September</option>
                 <option value="10">October</option>
                 <option value="11">November</option>
                 <option value="12">December</option>
             </select>
        </div>
        
        <div class="form-group">
            <label for="year">Enter Year:</label>
            <input type="text" id="year" name="year" placeholder="Hint:2023" required>
        </div>

        <div class="form-group">
              <label for="typefee">Fee Type</label>
                 <select name="typefee" required>
                    <option value="Choose type">Choose Fee Type</option>
                    <option value="Library<">Library</option>
                    <option value="Transport Services">Transport Services</option>
                    <option value="DMC">DMC</option>
                    <option value="Certificate">Certificate</option>
                    <option value="Hostelized">Hostelized</option>
                    <option value="Tution">Tution</option>
                    <option value="Examination">Examination</option>
                 </select>
           </div>

        <div class="form-group">
            <label for="smsfee">Enter Amount:</label>
            <input type="number" id="smsfee" name="smsfee" required>
        </div>

        <div class="form-group">
            <label for="balance">Balance:</label>
            <input type="balance" id="balance" name="balance" required>
        </div>
        
        <button type="submit">Submit</button>
    </form>

</body>
</html>
