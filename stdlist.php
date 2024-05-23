<?php

include("db.php");

if (isset($_POST['search'])) 
{
    $searchTerm = $_POST['search'];
    $sql = "SELECT * FROM register WHERE regno LIKE '%$searchTerm%'";
}
 else 
 {
    $sql = "SELECT * FROM register";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/lpc.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
}

        .container {
            width: 2200px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: white;
            backdrop-filter: blur(10px);
            
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: white;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color:yellow;
            color: black;
        }

        .btn-primary{
             background-color:blue;
             padding: 8px;
             padding-bottom: 6px;
             padding-top: 18px;
             
        }
        .btn-danger{
             background-color:red;
             padding: 8px;
             padding-bottom: 6px;
             padding-top: 18px;
             margin-left: 10px;
            
        }

.container .header .nav .search {
    flex: 3;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
.container .header .nav .search input[type=text] {
    border: none;
    background: white;
    padding: 10px;
    width: 50%;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
.container .header .nav .search button {
    width: 40px;
    height: 40px;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container .header .nav .search button img {
    width: 30px;
    height: 30px;
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
        <h1>Student Registeration Details</h1>
                <div class="header">
                  <div class="nav">
                    <form method="POST">
                      <div class="search">
                        <input type="text" placeholder="Reg Number...." name="search">
                        <button type="submit"><img src="img/search.png" alt=""></button>
                      </div>
                  </div>
                </div>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>Serial#</th>
                    <th>Reg.No</th>
                    <th>Name</th>
                    <th>Father</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Admission Date</th>
                    <th>Ph.Number</th>
                    <th>Department</th>
                    <th>Session</th>
                    <th>Section</th>
                    <th>Tuition Fees</th>
                    <th>Actions</th>
                </tr>
                
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['regno']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['admidate']; ?></td>
                    <td><?php echo $row['cellno']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['session']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['tutionfee']; ?></td>
                    <td>
                    <a href="regedit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
                        <img src="img/edit.png" alt="">
                        </a>
                        <a href="regdelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                        <img src="img/del.png" alt="">
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
} else {
    echo '<p>There are no records in the reg table.</p>';
}
$conn->close();
?>
