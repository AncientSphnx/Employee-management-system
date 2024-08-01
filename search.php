<!DOCTYPE html>
<body>
    <?php
    $dbServername = 'localhost';
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "employee";
    
    $conn = mysqli_connect( $dbServername , $dbUsername , $dbPassword , $dbName );
    if (!$conn)
    
     {
    
         die('Could not connect: '.mysqli_connect_error());
     }
     
     mysqli_select_db($conn,$dbName);
     $fname=$_GET['fname'];
     $sql="SELECT fname from employee where fname='$fname'";
     $result=mysqli_query($conn,$sql);
     if(mysqli_fetch_assoc($result))
     {  $count=1;
         $sql="SELECT fname,lname,Department,designation,Address,Phone_number from employee where fname='$fname'";
         $result1=mysqli_query($conn,$sql);
         while($rows=mysqli_fetch_assoc($result1))
         {              
             echo '<form action="viewu.php><tr class="border-b hover:bg-gray-50">
         <td class="p-2 text-center">'.$count.'</td>
         <td class="p-2 text-center"><img src="https://via.placeholder.com/50" alt="Photo" class="rounded-full"></td>
         <td class="p-2 text-center">'.$rows['fname'].'</td>
         <td class="p-2 text-center">'.$rows['lname'].'</td>
         <td class="p-2 text-center">'.$rows['Department'].'</td>
         <td class="p-2 text-center">'.$rows['designation'].'</td>
         <td class="p-2 text-center">2020-04-24</td>
         <td class="p-2 text-center">'.$rows['Address'].'</td>
         <td class="p-2 text-center">'.$rows['Phone_number'].'</td>
         <td class="p-2 text-center"><a href="#" class="text-blue-500">✏️</a></td></form>';
         $count++;    
         }
     }
     else
     {
         echo "Employee not found";
     }
    ?>
</body>
</html>