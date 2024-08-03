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
    <title>EMS - All Employees</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 min-h-screen">
            <div class="text-center py-4 border-b border-gray-700">
                <h1 class="text-xl font-semibold">EMS</h1>
            </div>
            <nav class="mt-4">
                <ul>
                    <li class="px-6 py-2 hover:bg-gray-700 cursor-pointer" ><a href="index.php">Dashboard</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">All Employee</h1>
            </div>

            <!-- Table -->
            <div class="bg-white rounded shadow-md p-4">
                <div class="flex justify-between items-center mb-4">
                    
                    <div>
                        <label for="search" class="mr-2">Search:</label>
                        <form  method="post">
                        <input id="search" type="search" class="p-2 border rounded" name="fname" href="#search">
                        </form>
                    </div>
                </div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-2 border">SN</th>
                            <th class="p-2 border">Employee ID</th>
                            <th class="p-2 border">Name</th>
                            <th class="p-2 border">Email</th>
                            <th class="p-2 border">Department</th>
                            <th class="p-2 border">Post</th>
                            <th class="p-2 border">Address</th>
                            <th class="p-2 border">Mobile</th>
                            <th class="p-2 border">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <div class="search" id="search">
                        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                            <?php
                                mysqli_select_db($conn,$dbName);
                                        $fname=$_POST['fname'];
                                        $sql="SELECT fname from employee where fname='$fname'";
                                        $result=mysqli_query($conn,$sql);
                                        if(mysqli_fetch_assoc($result))
                                        {  $count=1;
                                            $sql="SELECT fname,lname,Department,designation,Address,Phone_number from employee,department where fname='$fname'";
                                            $result1=mysqli_query($conn,$sql);
                                            while($rows=mysqli_fetch_assoc($result1))
                                            {             
                                                echo '<form action="viewu.php><tr class="border-b hover:bg-gray-50">
                                                <td class="p-2 text-center">'.$count.'</td>
                                                <td class="p-2 text-center">'.$rows['E_id'].'</td>
                                                <td class="p-2 text-center">'.$rows['fname'].'</td>
                                                <td class="p-2 text-center">'.$rows['lname'].'</td>
                                                <td class="p-2 text-center">'.$rows['Department'].'</td>
                                                <td class="p-2 text-center">'.$rows['designation'].'</td>
                                                <td class="p-2 text-center">'.$rows['Address'].'</td>
                                                <td class="p-2 text-center">'.$rows['Phone_number'].'</td>';
                                                echo "<form  action='delete.php' method='post'>
                                                <td class='p-2 text-center'><button class='text-blue-500' name='E_id' href='delete.php' id='delete' value=".$rows['E_id'].">delete</button></td></form>";
                                                $count++;    
                                            }
                                        }
                                        else
                                        {
                                            echo "Employee not found";
                                        }
                                        ?>
                        </div>
                        </tr>
                        <hp class="border-b hover:bg-gray-50">
                        <?php else: ?>
                        <?php 
                        $sql="SELECT * FROM employee,department order by E_id asc";
                        $result = mysqli_query($conn,$sql);
                        if ($result)
                        {
                            $count=1;
                            while($rows=mysqli_fetch_assoc($result))
                            {   

                                echo '<tr class="border-b hover:bg-gray-50">
                                <td class="p-2 text-center">'.$count.'</td>
                                <td class="p-2 text-center">'.$rows['E_id'].'</td>
                                <td class="p-2 text-center">'.$rows['fname'].'</td>
                                <td class="p-2 text-center">'.$rows['lname'].'</td>
                                <td class="p-2 text-center">'.$rows['Department'].'</td>
                                <td class="p-2 text-center">'.$rows['designation'].'</td>
                                <td class="p-2 text-center">'.$rows['Address'].'</td>
                                <td class="p-2 text-center">'.$rows['Phone_number'].'</td>';
                                echo "<form  action='delete.php' method='post'>
                                <td class='p-2 text-center'><button class='text-blue-500' name='E_id' href='delete.php' id='delete' value=".$rows['E_id'].">delete</button></td></form>";
                                $count++;    
                            }

                        }
                        else{
                            echo 'No employees';
                        }
                        ?>
                        <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
