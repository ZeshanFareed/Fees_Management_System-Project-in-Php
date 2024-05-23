<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/gen.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            width: 50%;
            margin: auto;
            overflow: hidden;   
        }

        h2 {
            text-align: center;
            color: white;
        }

        form {
            
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000000;
            backdrop-filter: blur(5px);
            color: white;
        }

        label {
            display: block;
            font-weight: bold;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            display: inline-block;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color:black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 13px;
            padding-left: 270px;
            padding-right: 270px;
        }

        input[type="submit"]:hover {
            background-color: red;
        }
    </style>
    <title>Generate Fee</title>
</head>
<body>


    <div class="container">
        <h2>Student Generate Fee Form</h2>
        <form action="geninsert.php" method="post">

            <div class="form-group">
                <label for="sesName">Session</label>
                <select id="sesName" name="sesName" required>
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
                <label for="depName">Department</label>
                <select id="depName" name="depName" required>
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
                <label for="secName">Section</label>
                <select id="secName" name="secName" required>
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
            <label for="subdate">Submission Date:</label>
            <input type="date" id="subdate" name="subdate" required>
        </div>

        <div class="form-group">
            <label for="duedate">Fine After Due Date:</label>
            <input type="text" id="duedate" name="duedate" required>
        </div>

        <div class="form-group">
            <label for="bank">Choose Bank:</label>
                <select name="bank" required>
                    <option value="Choose Bank">Please Choose Bank</option>
                    <option value="Faysal Bank Limited">Faysal Bank Limited</option>
                    <option value="Meezan Bank Limited">Meezan Bank Limited</option>
                    <option value="Bank Alfalah Islamic">Bank Alfalah Islamic</option>
                    <option value="Habib Bank Limited">Habib Bank Limited</option>
                    <option value="National Bank of Pakistan">National Bank of Pakistan</option>
                    <option value="United Bank Limited">United Bank Limited</option>
                    <option value="Bank of Punjab">Bank of Punjab</option>
                    <option value="Allied Bank Limited">FAllied Bank Limited</option>
                </select>
        </div>

        <div class="form-group">
            <label for="accno">Account Number:</label>
            <input type="text" id="accno" name="accno" placeholder="XXXXXXXXXXXXXX" required>
        </div>

        <div class="form-group">
           <label for="semesterFee">Semester Fee:</label>
           <input type="number" name="semesterFee" id="semesterFee" required>
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
            <input type="submit" value="Generate Fee">

        </div>

        </form>
    </div>
</body>
</html>
