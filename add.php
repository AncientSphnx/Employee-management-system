<html>
    
    <body>
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


mysqli_select_db($conn,$dbName);
$E_id=$_POST['E_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Phone_number=$_POST['Phone_number'];
$Address=$_POST['Address'];
$Department=$_POST['Department'];
$Designation=$_POST['designation'];

$sql="INSERT into employee(fname,lname,Phone_number,Address,Department,designation,E_id) VALUES('$fname','$lname',$Phone_number,'$Address','$Department','$Designation','$E_id')";



$result = mysqli_query($conn,$sql);
if($result)
{
    header("Location: index.php");
    exit;
}

?>
</body>
</html>
