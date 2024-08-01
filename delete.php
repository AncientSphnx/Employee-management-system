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
     
     $E_id=$_POST['E_id'];
        $sql="DELETE from employee 
            where E_id='$E_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: viewu.php");
            exit;
        }
    
    
    ?>
</body>
</html>