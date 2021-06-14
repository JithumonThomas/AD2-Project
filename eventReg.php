<?php
session_start();

$regid=$_REQUEST['regid'];
// echo $regid;



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
$sql="select * from tbl_event_add where id=$regid";


// echo $sql;
// exit;
$result=$conn->query($sql);

//echo $result;
$row=mysqli_fetch_array($result);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
         body {
        background-image: url("image/images.png");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Lucida Console", Courier, monospace;
      }
    </style>
</head>
<body>
<?php include'navuser.php'?>
    <a href="eventDisplay.php"><button>BACK</button></a>
    <form class="offset-md-3 col-md-6" method="POST" action="EventregAction.php">
        <h2>Event Registration</h2>
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="txt_name" id="name" value="<?php echo $_SESSION['name'];?>"></td>
            </tr>
            <tr>
                <td>Item</td>
                <td>:</td>
                <td><input type="text" name="txt_item" id="item" value="<?php echo  $row["item"]?>"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td>:</td>
                <td><input type="date" name="txt_time"  value="<?php echo  $row["time"]?>"></td>
            </tr>
            <tr>
                <td>Phone No</td>
                <td>:</td>
                <td><input type="tel" name="txt_number" id="phone"></td>
            </tr>
        </table>
        <input type="submit" value="Register">
        <input type="reset" value="reset">
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>