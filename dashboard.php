<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashstyle.css">
    <title>Admin Panel</title>
</head>
<body>
<div class="side-menu">
    <div class="brand-name">
        <h1 ><img src="img/images.png" alt=""></h1>
    </div>
    <ul>
        <li><a href="dashboard.php"><img src="img/dash.png" alt="">&nbsp; <span>Dashboard</span></a></li>
        <li><a href="entries.php"><img src="img/reading-book (1).png" alt="">&nbsp; <span>Entries</span></a></li>
        <li><a href="listing-detail.php"><img src="img/list.png" alt="">&nbsp; <span>Listing Detail</span></a></li>
        <li><a href="fees-manage.php"><img src="img/school.png" alt="">&nbsp;<span>Fees Manage</span></a></li>
        <li><a href="report.php"><img src="img/settings.png" alt="">&nbsp; <span>Reports</span></a></li>
    </ul>
</div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="img/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <a href="logout.php"><img src="img/lgn.png" alt=""></a>
                    <div class="img-case">
                        <img src="img/Rooshan Fareed.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <?php

           include("db.php");

           $sql = "SELECT COUNT(*) AS total_departments FROM department";
           $result = $conn->query($sql);

           if ($result === false) 
           {
             die("Error: " . $conn->error);
           }

            $row = $result->fetch_assoc();
            $departmentName=$row['total_departments'];

            ?>

        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <a href="depview.php">
                        <h3>Department List</h3>
                        </a>
                    </div>

                    <p><?php echo $departmentName; ?></p>

                   <div class="icon-case">
                        <img src="img/students.png" alt="">
                   </div>
                </div>

                <?php

           include("db.php");

           $sql = "SELECT COUNT(*) AS total_section FROM section";
           $result = $conn->query($sql);

           if ($result === false) 
           {
             die("Error: " . $conn->error);
           }

            $row = $result->fetch_assoc();
            $sectionName=$row['total_section'];

            ?>
                    
                <div class="card">
                    <div class="box">
                       <a href="secview.php">
                        <h3>Section List</h3>
                        </a>
                    </div>

                   <p><?php echo $sectionName; ?></p>

                    <div class="icon-case">
                        <img src="img/schools.png" alt="">
                    </div>
                    
                </div>

                <?php

                 include("db.php");
 
                 $sql = "SELECT SUM(smsfee) AS smsfee FROM deposit";
                 $result = $conn->query($sql);

                 if ($result === false)
                 {
                   die("Error: " . $conn->error);
                 }

                 $row = $result->fetch_assoc();
                 $semesterfee = $row['smsfee'];

                ?>

                <div class="card">
                    <div class="box">
                        <a href="sessview.php">
                        <h3>Deposit Fee</h3>
                        </a>
                    </div>

                        <p><?php echo $semesterfee; ?></p>
                    
                    <div class="icon-case">
                        <img src="img/income.png" alt="">
                    </div>
                </div>
            </div>
           
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>