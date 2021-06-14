<?php
$fName=$_POST['txtName1'];
$password=$_POST['txtPsw1'];
// echo $fName;
// echo $password;

$servername='localhost';
$uname='root';
$pass='Jithu_root9';
$dbname='db_club_mang';
$conn=new mysqli($servername,$uname,$pass,$dbname);
if($con->connect_error)
{
    die("error,could'ntconnect".$conn->connect_error);
}

$sql="INSERT INTO `tbl_reg`(`username`,`password`) VALUES('$fName','$password')";
if($conn->query($sql)===TRUE)
{
    echo "<script>
            alert('Registered');
            window.location.href='userReg.html';
            </script>";
}
else
{
   echo "error:".$sql."<br>".$conn->error;
}

$conn->close();
    ?>