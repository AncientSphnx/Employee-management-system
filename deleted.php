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
     $D_no=$_POST['D_no'];
    $sql1="DELETE from department 
            where D_no='$D_no'";
    $result1 = mysqli_query($conn,$sql1);
    if($result1){
        header("Location: view1.php");
        exit;
    }