<?php
 $fName=$_POST['firstname'];
 $lName=$_POST['lastname'];
 $address=$_POST['txtAddress'];
 $district=$_POST['district'];
 $gender=$_POST['gender'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];

// echo "$fName,$lName,$address,$district,$gender,$phone,$email";
$servername='localhost';
$uname='root';
$pass='Jithu_root9';
$dbname='db_club_mang';
$conn=new mysqli($servername,$uname,$pass,$dbname);
if($con->connect_error)
{
    die("error,could'ntconnect".$conn->connect_error);
}


$sql = "INSERT INTO `tbl_mebreg`(`first_name`,`last_name`,`address`,`district`,`gender`,`phone`,`email`
)VALUES ('$fName','$lName','$address','$district','$gender','$phone','$email')";
// echo $sql;
// exit;

    if($conn->query($sql) === TRUE)
    {
        echo "<script>
            alert('Registration Succesfuly Completed');
            window.location.href='user.php';
            </script>";
    }

    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close connection
   
    $conn->close();
?>