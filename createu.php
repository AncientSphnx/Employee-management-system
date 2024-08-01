<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS - Register Employee</title>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php

$dbServername = 'localhost';
$dbUsername = "root";
$dbPassword = "";
$dbName = "employee";

$conn = mysqli_connect( $dbServername , $dbUsername , $dbPassword , $dbName );
if (!$conn)

 {

     die('Could not connect: '. mysqli_connect_error() );

}?>
<body class="bg-gray-100 font-sans">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white min-h-screen">
            <div class="p-4 text-center text-2xl font-bold border-b border-gray-700">EMS</div>
            <nav class="mt-4">
                <ul>
                    <li class="py-2 px-4 hover:bg-gray-700 cursor-pointer"><a href="index.php">Dashboard</a></li>
                    </ul>
                </ul>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-semibold">Register Employee</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- General Information Form -->
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-xl font-bold mb-4">General Information</h2>
                    <form action="add.php" method="post">
                        <div class="mb-4">
                            <label class="block text-gray-700">Employee ID</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Employee ID" name="E_id">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">First name</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="First name" name="fname">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Last name</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Last name" name="lname">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Address</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Address" name="Address">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Mobile number</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Mobile number" name="Phone_number">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Department</label>
                            <select class="w-full p-2 border border-gray-300 rounded"  name="Department">
                                <option value="">Select Departmet</option>
                                <?php
                                    
                                    $sql1="SELECT * from department";
                                    $result0=mysqli_query($conn,$sql1);
                                    if($result0)
                                    { 
                                            while($row1=mysqli_fetch_assoc($result0))
                                            {
                                                echo '<option value='.$row1['Name'].'>'.$row1['Name'].'</option>';
                                            }
                                    }
                                ?>
                            </select>
                        </div>
                        <!--<div class="mb-4">
                            <label class="block text-gray-700">Department Number</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Department Number" name="D_no">
                        </div>-->
                        <div class="mb-4">
                            <label class="block text-gray-700">Designation</label>
                            <select class="w-full p-2 border border-gray-300 rounded"  name="designation">
                                <option value="">Select Designation</option>
                                <option value="Manager">Manager</option>
                                <option value="Developer">Developer</option>
                                <option value="Analyst">Analyst</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
