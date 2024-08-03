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
            <li class="toggle-departmentsa">Employee
                <ul class="subsectiona">
                    <li onclick="window.location.href='createu.php';">Create User</li>
                    <li onclick="window.location.href='viewu.php';">View User</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
        </div>
        <div class="info-cards">
            <div class="card blue" href="count.php">employee: <?php include("count.php"); echo htmlspecialchars($total);  ?></div>
            <div class="card yellow">Department: <?php include("count.php"); echo htmlspecialchars($total1);  ?></div>
        <div class="user-details">
            <p>Email: Your Email/p>
            <p>Address: Your address</p>
            <p>Mobile number: Your phone number</p>
            <p>Designation: Your DEsignation</p>
            <p>Start date: Starting date</p>
            <p>Department: Department</p>
            <p>Role: Admin</p>
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
