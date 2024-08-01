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
    <title>EMS - Departments</title>
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
            <section class="department-list">
                <h2>All Departments</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Department number</th>
                            <th>Location</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
                        $sql="SELECT * FROM department";
                        $result = mysqli_query($conn,$sql);
                        if ($result)
                        {
                            $count=1;
                            while($rows=mysqli_fetch_assoc($result))
                            {              
                                echo '<tr class="border-b hover:bg-gray-50">
                                <td class="p-2 text-center">'.$count.'</td>
                                <td class="p-2 text-center">'.$rows['Name'].'</td>
                                <td class="p-2 text-center">'.$rows['D_no'].'</td>
                                <td class="p-2 text-center">'.$rows['location'].'</td>';
                                echo '<form action="deleted.php" method="post">
                                <td class="p-2 text-center"><button class="text-blue-500" name="D_no" href="#delete" id="D_no" value='.$rows['D_no'].'>delete</button></td></form>';
                                $count++;    
                            }

                        }
                        else{
                            echo 'No departments';
                        }
                        ?>
                        
                        </tr>
                        
                        
                        <!--<tr>
                            <td>2</td>
                            <td>Sales Department</td>
                            <td>This is Sales department</td>
                            <td><a href="#"><img src="edit-icon.png" alt="Edit"></a></td>
                            <td><a href="#"><img src="delete-icon.png" onclick="al()" alt="Delete"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Support Department</td>
                            <td>This is Support department</td>
                            <td><a href="#"><img src="edit-icon.png" alt="Edit"></a></td>
                            <td><a href="#"><img src="delete-icon.png" onclick="al()" alt="Delete"></a></td>
                        </tr>-->
                    </tbody>
                </table>
                <div class="pagination">
                    <nav>
                        <ul>
                            <li><a href="#">Previous</a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </nav>
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
    
    .department-list {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .department-list h2 {
        margin-top: 0;
        margin-bottom: 20px;
    }
    
    .department-list .controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .department-list .controls label {
        margin-right: 5px;
    }
    
    .department-list .controls select,
    .department-list .controls input[type="search"] {
        padding: 5px;
        font-size: 16px;
    }
    
    .department-list .controls .search {
        display: flex;
        align-items: center;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    table th, table td {
        border: 1px solid #dee2e6;
        padding: 8px;
        text-align: left;
    }
    
    table th {
        background-color: #f1f1f1;
    }
    
    table img {
        width: 16px;
        height: 16px;
    }
    
    .pagination {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .pagination nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 5px;
    }
    
    .pagination nav ul li {
        margin: 0;
    }
    
    .pagination nav ul li a {
        padding: 5px 10px;
        text-decoration: none;
        color: #007bff;
        border: 1px solid #dee2e6;
        border-radius: 4px;
    }
    
    .pagination nav ul li a.active {
        background-color: #007bff;
        color: white;
    }
    
    .pagination nav ul li a:hover {
        background-color: #0056b3;
        color: white;
    }
    
</style>
<script>
    function al()
    {
        confirm("Do you want to delete?");
    }
</script>
</html>
