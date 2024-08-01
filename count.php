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

     die('Could not connect: '. mysqli_connect_error() );

}
//for counting number of employees
$sql="SELECT count(fname) as totalemployees from employee";
$result = mysqli_query($conn,$sql);
$total=mysqli_fetch_column($result);
//for counting number of departments
$sql1="SELECT count(D_no) as totaldepartments from department";
$result1 = mysqli_query($conn,$sql1);
$total1=mysqli_fetch_column($result1);

?>

</body>
</html>