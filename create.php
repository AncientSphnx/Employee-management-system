<!DOCTYPE html>
<html lang="en">
    <?php

    $dbServername = 'localhost';
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "employee";
    
    $conn = mysqli_connect( $dbServername , $dbUsername , $dbPassword , $dbName );
    if (!$conn)
    
     {
    
         die('Could not connect: '. mysqli_connect_error() );
    
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS - Create Department</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <h1>EMS</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <section class="department-form">
                <h2><i class="icon-department"></i> Department</h2>
                <form method="post">
                    <h3>Create New Department</h3>
                    <div class="form-group" href="#create">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="Name">
                        <label for="description">Description</label>
                        <textarea id="description" name="description"></textarea>
                        <label for="name">Department number</label>
                        <input type="text" id="name" name="D_no">
                        <label for="name">Location</label>
                        <input type="text" id="name" name="location">
                    <button type="submit">Submit</button>
                    </div>
                   
                </form>
                <div class="form-group" id="create">
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                        <?php
                            mysqli_select_db($conn,$dbName);
                            $name=$_POST['Name'];
                            $D_no=$_POST['D_no'];
                            $location=$_POST['location'];
                            $sql="INSERT into department VALUES($D_no,'$location','$name')";
                             $result = mysqli_query($conn,$sql);
                            if($result)
                            {
                                header("Location: index.php");
                                exit;
                            }

                        ?>
                     <?php endif; ?>
                    </div>
            </section>
        </main>
    </div>
</body>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
        height: 100vh;
    }
    
    .container {
        display: flex;
        width: 100%;
    }
    
    .sidebar {
        width: 250px;
        background-color: #343a40;
        color: white;
        padding: 20px;
        height: 100%;
    }
    
    .sidebar .logo h1 {
        margin: 0;
        padding-bottom: 20px;
        border-bottom: 1px solid #4f4f4f;
    }
    
    .sidebar nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .sidebar nav ul li {
        margin: 10px 0;
    }
    
    .sidebar nav ul li a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 10px;
        border-radius: 4px;
    }
    
    .sidebar nav ul li a:hover, .sidebar nav ul li a:focus {
        background-color: #495057;
    }
    
    .content {
        flex-grow: 1;
        padding: 20px;
        background-color: #f8f9fa;
    }
    
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #dee2e6;
        padding-bottom: 10px;
    }
    
    header input[type="search"] {
        padding: 5px;
        font-size: 16px;
    }
    
    header .user-info {
        font-size: 16px;
    }
    
    .department-form {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .department-form h2 {
        margin-top: 0;
        display: flex;
        align-items: center;
    }
    
    .department-form h2 i {
        margin-right: 10px;
    }
    
    .department-form h3 {
        margin-top: 0;
    }
    
    .department-form .form-group {
        margin-bottom: 15px;
    }
    
    .department-form .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    
    .department-form .form-group input,
    .department-form .form-group textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }
    
    .department-form button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .department-form button:hover {
        background-color: #0056b3;
    }
    
</style>
</html>
