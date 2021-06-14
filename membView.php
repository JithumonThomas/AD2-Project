<?php
$view_id=$_REQUEST['viewid'];
$servername = "localhost";
$username = "root";
$password = "Jithu_root9";
$dbname="db_club_mang";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql="select * from tbl_mebreg where id=$view_id";
// echo $sql;
// exit;
$result=$conn->query($sql);

//echo $result;
$row=mysqli_fetch_array($result);
echo  $row["first_name"];
echo"<br>";
echo  $row["last_name"];
echo"<br>";
echo  $row["address"];
echo"<br>";
echo  $row["district"];
echo"<br>";
echo  $row["phone"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <hr>
<a href="admin.php"><button >HOME</button></a>
<a href="manipulateMeb.php"><button >BACK</button></a>
</body>
</html>