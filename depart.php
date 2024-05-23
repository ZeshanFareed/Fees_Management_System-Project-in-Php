<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('img/dep.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
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
        <h2>Department Registration Form</h2>
        <form method="post" action="depinsert.php">
            <div class="form-group">
                <label for="departmentName">Department Name:</label>
                <input type="text"  name="depName" required>
            </div>

            <div class="form-group">
                <label for="semesterFee">Semester Fee:</label>
                <input type="number" name="semesterFee" required>
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
