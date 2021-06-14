<?php
$dltId=$_REQUEST['deleteid'];

include('db.php');
$sql="DELETE FROM `tbl_event_reg` WHERE `id`='$dltId'";
// echo $sql;
// exit;



$result=$conn->query($sql);
//query checking
//echo $result;
if($result==1)
        {
            header('location:EventregMeb.php');
        }
        else 
        {
          echo "Error : " . $sql . "<br>" . $sql2 ."<br>" . $conn->error;
        }
?>