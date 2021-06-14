<?php
session_start();
$session=$_SESSION['name'];


$name=$_POST['txt_name'];
$item=$_POST['txt_item'];
$time=$_POST['txt_time'];
$Number=$_POST['txt_number'];
 //echo $name,$item,$time,$Number;
 

$servername='localhost';
$uname='root';
$pass='Jithu_root9';
$dbname='db_club_mang';
$conn=new mysqli($servername,$uname,$pass,$dbname);
if($con->connect_error)
{
    die("error,could'ntconnect".$conn->connect_error);
}

$sql1="SELECT  `name`,`item` FROM `tbl_event_reg` WHERE `name`='$session'&&`item`='$item'" ;
// echo $sql1;
//  exit;
$result = $conn->query($sql1);




if($result->num_rows>0)
{
    echo "<script>
            alert('Your Participation Already Complited');
            window.location.href='eventDisplay.php';
            </script>";
}


else{
$sql = "INSERT INTO `tbl_event_reg`(`name`,`item`,`time`,`phone_no`)VALUES ('$name','$item','$time','$Number')";
//  echo $sql;
//  exit;

    if($conn->query($sql) === TRUE)
    {
        echo "<script>
            alert('Participation Succesfuly Completed');
            window.location.href='eventDisplay.php';
            </script>";
    }

    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    

    // Close connection
    
    $conn->close();
?>
