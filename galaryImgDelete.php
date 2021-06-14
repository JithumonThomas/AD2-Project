<?php
$dltId=$_REQUEST['deleteid'];

include('db.php');
$sql="DELETE FROM `tbl_photo_upload` WHERE `id`='$dltId'";
// echo $sql;
// exit;



$result=$conn->query($sql);
//query checking
//echo $result;
if($result==1)
        {
            header('location:galary_manipulation.php');
        }
        else 
        {
          echo "Error : " . $sql . "<br>" . $sql2 ."<br>" . $conn->error;
        }
?>