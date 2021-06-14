<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<a href="eventAdd.html"><button>BACK</button></a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>DESCRIPTION</th>
            <th>ITEM</th>
            <th>TIME</th>
            <th>DELETE</th>
        </tr>
    
    <?php
    include('db.php');
    $sql="SELECT * FROM tbl_event_add";

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
 <td><?php echo $row["image"];?></td>
 <td><?php echo $row["description"];?></td>
 <td><?php echo $row["item"];?></td>
 <td><?php echo $row["time"];?></td>
 <td><a href='eventdltAction.php?deleteid=<?php echo $row['id'];?>'><button name='delete' onclick="return confirm('are you want to delete')">DELETE</button></a></td>

</tr>
<?php
}
} 
else { echo "0 results";
}
$conn->close();
?> 

</table>

</body>
</html>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>