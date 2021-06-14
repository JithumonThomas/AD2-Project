<?php

$vale=$_POST['search'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
        background-image: url("photo/back.png");
        background-repeat: no-repeat;

background-size: cover;
background-color: #cccccc;
font-family:"Lucida Console", Courier, monospace;;
font-size: "large";
}
table{
background-color: #cccccc;
text-align: center;
}
    </style>
</head>
<header>
<?php include'nav.php'?>
    <div class="row">
        <div class="col-md-6">
        <a href="admin.php"><button>BACK</button></a>
        </div>
        <div class="col-md-6">
            <form  method="post" action="search.php">
            <input type="text" placeholder="Search Member.." name="search">
            <button type="submit"><i>Search</i></button>
            </form>
        </div>
    </div>
    </header>
    
<body>
<br><br>
    <center><table border="1">
        <tr>
            <th>ID</th>
            <th>FIRST_NAME</th>
            <th>LAST_NAME</th>
            <th>ADDRESS</th>
            <th>DISTRICT</th>
            <th>GENDER</th>
            <th>PHONE_NO</th>
            <th>EMAIL</th>
            <th>UPDATE</th>
            <th>VIEW</th>
            <th>DELETE</th>
        </tr>
    
    <?php
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

  $sql = "SELECT  * FROM tbl_mebreg WHERE first_name LIKE '%$vale%'";


 // echo $sql; 
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

 //output data of each row
 $i=1;
 while($row = $result->fetch_assoc()) 
 {
 ?>
<tr>

 <td><?php echo $i;  $i++?></td>
 <td><?php echo $row["first_name"];?></td>
 <td><?php echo $row["last_name"];?></td>
 <td><?php echo $row["address"];?></td>
 <td><?php echo $row["district"];?> </td>
 <td><?php echo $row["gender"];?></td>
 <td><?php echo $row["phone"];?></td>
 <td><?php echo $row["email"];?></td>

 <td><a href='membUpdate.php?editid=<?php echo $row['id'];?>'><button name='edit' >UPDATE</button></a></td>
 <td><a href='membView.php?viewid=<?php echo $row['id'];?>'><button name='edit' >VIEW</button></a></td>
 <td><a href='membDelete.php?deleteid=<?php echo $row['id'];?>'><button name='delete' onclick="return confirm('you want to delete')">DELETE</button></a></td>

</tr>
<?php
}
} 
else { echo "0 results";
}
$conn->close();
?> 

</table></center>

</body>
</html>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html >