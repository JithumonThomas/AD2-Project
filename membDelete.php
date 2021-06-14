<?php
//database connection

$dltId=$_REQUEST['deleteid'];

$servername="localhost";
$username="root";
$password="Jithu_root9";
$dbname="db_club_mang";
$conn=new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("error,could'nt connect".$conn->connect_error);
}
// delete operation
$sql="DELETE FROM `tbl_mebreg` WHERE `id`='$dltId'";
// echo $sql;
// exit;



$result=$conn->query($sql);
//query checking
//echo $result;
if($result==1)
        {
            header('location:manipulateMeb.php');
        }
        else 
        {
          echo "Error : " . $sql . "<br>" . $sql2 ."<br>" . $conn->error;
        }
?>