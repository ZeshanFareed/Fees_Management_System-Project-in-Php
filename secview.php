<?php

include("db.php");

if (isset($_POST['search'])) 
{
    $searchTerm = $_POST['search'];
    $sql = "SELECT * FROM section WHERE sectionName LIKE '%$searchTerm%'";
}
 else 
 {
    $sql = "SELECT * FROM section";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Section Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/nl.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            max-width: 920px;
            margin: 10px;
            margin-left: 180px;
            padding: 15px;
            backdrop-filter: blur(10px);
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            padding-left: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: white;
        }

        table, th, td {
            border: 1px solid #FFFFFF;
            border-width: 3px;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: yellow;
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
        <h2>Section Details</h2>
                <div class="header">
                  <div class="nav">
                    <form method="POST">
                      <div class="search">
                        <input type="text" placeholder="Section Name..." name="search">
                        <button type="submit"><img src="img/search.png" alt=""></button>
                      </div>
                  </div>
                </div>

        <table class="table table-border">
            <thead>
                <tr>
                    <th>Serial#</th>
                    <th>Section Name</th>
                    <th>Student Capacity</th>
                    <th>Creation Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                

                <?php
                 while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['sectionName']; ?></td>
                    <td><?php echo $row['stdcapacity']; ?></td>
                    <td><?php echo $row['creationDate']; ?></td>
                    <td>
                        <a href="secedit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
                        <img src="img/edit.png" alt="">
                        </a>
                        <a href="secdelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
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

