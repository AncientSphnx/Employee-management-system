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
/*function department(){
    global $dbServername,$dbPassword,$dbName,$dbUsername;
    $conn = mysqli_connect( $dbServername , $dbUsername , $dbPassword , $dbName );
    $sql1="SELECT Name from department";
    $result0=mysqli_query($conn,$sql1);
    if($result0)
    {
    while($row1=mysqli_fetch_assoc($result0))
    {
        
        echo "<option value=".$row1['Name'].">".$row1['Name']."</option>";
    }
    }
}*/

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
