<?php
$fName=$_POST['txtName1'];
$password=$_POST['txtPsw1'];
// echo $fName;
// echo $password;

$servername='localhost';
$uname='root';
$pass='Jithu_root9';
$dbname='db_club_mang';$conn=new mysqli($servername,$uname,$pass,$dbname);
if($con->connect_error)
{
    die("error,could'ntconnect".$conn->connect_error);
}
echo "connected successfully";

$sql="SELECT username,password FROM tbl_reg WHERE username='$fName'and password='$password'";

	
    $result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);
	
if($num==1)

{
	session_start();
	 $_SESSION['name']= $fName;
	if($fName=="admin" && $password=="admin")
	{
		header('location:admin.php');
	}
	else

	header('location:user.php');
}
else
{
	header('location:index.html');


}

?>