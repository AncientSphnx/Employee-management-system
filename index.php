<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <div class="sidebar">
        <h2>Employee Management System</h2>
        <ul>
            <li>Dashboard</li>
            <li class="toggle-departments">Departments
                <ul class="subsection">
                    <li onclick="window.location.href='create.php';">Create</li>
                    <li onclick="window.location.href='view1.php';">View</li>
                </ul>
            </li>
            <li class="toggle-departmentsa">Users
                <ul class="subsectiona">
                    <li onclick="window.location.href='createu.php';">Create User</li>
                    <li onclick="window.location.href='viewu.php';">View User</li>
                </ul>
            </li>
            <!--<li>Roles</li>
            <li  onclick="window.location.href='permission.html';">Permissions</li>
            <li onclick="window.location.href='leave.html';">Staff Leave</li>-->
            <!--<li class="toggle-departmentso">Roles
                <ul class="subsectiono">
                    <li onclick="window.location.href='viewr.php';">View Roles</li>
                </ul>
            </li>
            <li class="toggle-departmentso">Staff Leave
                <ul class="subsectiono">
                    <li onclick="window.location.href='approvel.html';">Approve Leave</li>
                    <li onclick="window.location.href='leave.html';">Create Leave</li>
                </ul>
            </li>
            <li onclick="window.location.href='notice.html';">Staff Notice</li>
            <li onclick="window.location.href='mail.html';">Mail</li>-->
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
        </div>
        <div class="info-cards">
            <div class="card blue" href="count.php">employee: <?php include("count.php"); echo htmlspecialchars($total);  ?></div>
            <div class="card yellow">Department: <?php include("count.php"); echo htmlspecialchars($total1);  ?></div>
            
            <!--<div class="card red">Leave: 2</div>-->
        </div>
        <div class="user-details">
            <p>Email: inuman739@gmail.com</p>
            <p>Address: India</p>
            <p>Mobile number: 8296348812</p>
            <p>Designation: Software Engineer</p>
            <p>Start date: 2024-04-23</p>
            <p>Department: IT Department</p>
            <p>Role: admin</p>
        </div>
        <div class="charts">
            <div>
                <canvas id="areaChart"></canvas>
            </div>
            <div>
                <canvas id="barChart"></canvas>
            </div>
        </div>
        
    </div>
    <script src="scripts.js"></script>
</body>
</html>
