<?php
$edit=$_REQUEST['editid'];
$fName=$_POST['firstname'];
$lName=$_POST['lastname'];
$address=$_POST['txtAddress'];
$district=$_POST['district'];

$phone=$_POST['phone'];
// echo "$fName,$lName,$address,$district,$phone";
// exit;
//db connection


$servername = "localhost";
$username = "root";
$password = "Jithu_root9";
$dbname="db_club_mang";
$conn=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE `tbl_mebreg` SET `first_name`='$fName',`last_name`='$lName',`address`='$address',`district`='$district',`phone`='$phone' WHERE id=$edit";
// echo $sql;
// exit;
//query checking
if ($conn->query($sql) === TRUE) 
{
  echo "<script>
            alert('Updation Succesfuly Completed');
            window.location.href='manipulateMeb.php';
            </script>";
     
} else 
{
 echo "Error : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

