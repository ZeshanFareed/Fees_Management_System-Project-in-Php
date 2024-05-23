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

    <form action="exinsert.php" method="post">
        <h2>Extra Dues Generate Form</h2>

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
                <label for="depart">Department</label>
                <select id="depart" name="depart" required>
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
            <label for="month">Month</label>
              <select id="month" name="month" required>
                 <option value="">Choose Month</option>
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="November">November</option>
                 <option value="December">December</option>
             </select>
        </div>
        
           <div class="form-group">
              <label for="type">Fee Type</label>
                 <select name="type" required>
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
           <label for="totalfee">Total Fee</label>
           <input type="number" id="totalfee" name="totalfee" required>
        </div>

        <button type="submit">Submit</button>

    </form>
</body>
</html>
