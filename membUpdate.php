<?php
$edit=$_REQUEST['editid']; 

$$servername="localhost";
$username="root";
$password="Jithu_root9";
$dbname="db_club_mang";
$conn=new mysqli($servername,$username,$password,$dbname);
    //check connection
    if($conn->connect_error)
    {
        die("error,could'nt connect".$conn->connect_error);
    }

//query checking
$sql="SELECT * from tbl_mebreg where id=$edit";
$result=$conn->query($sql);

//echo $result;
$row=mysqli_fetch_array($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head> 
<body>  
<a href="admin.php"><button >HOME</button></a>
<a href="manipulateMeb.php"><button >BACK</button></a>
    <center><h1>Update Member Details</h1></center>
<br>  
<br>

<br><br> 
<form method="post" action="updateAct.php?editid=<?php echo $edit;?>" class="offset-md-3 col-md-6">  
  
<label> Firstname </label>         
<input type="text" name="firstname" size="15" value="<?php echo $row["first_name"];?>"> <br> <br>  
<label> Lastname: </label>         
<input type="text" name="lastname" size="15" value="<?php echo $row["last_name"];?>"> <br> <br>  
 
Address  
<br>  
<input type="text" size="50" name="txtAddress" value="<?php echo $row["address"];?>">
<br> <br> 
<label>   
District :  
</label> 
<select name="district"> 
<option value="District "> Select Your District</option>  
<option value="Thiruvanadapuram">Thiruvanadapuram</option>  
<option value="kollam">kollam</option>  
<option value="pathanamthitta">pathanamthitta</option>  
<option value="Alappuzha">Alappuzha</option>  
<option value="kottayam">kottayam</option>  
<option value="Idukki">Idukki</option>  
<option value="Ernakulam">Ernakulam</option> 
<option value="Thrissur">Thrissur</option> 
<option value="palakkad">palakkad</option> 
<option value="Malappuram">Malappuram</option>  
<option value="kozhikkode">kozhi kkode</option>  
<option value="vayanad">vayanad</option>
<option value="kannur">kannur</option>
<option value="kasargode">kasargode</option>  
</select>  
  
<br>  
<br>  

  
<label>   
Phone :  
</label> 
<input type="text" name="phone" size="10" value="<?php echo $row["phone"];?>"> <br> <br>  
 

<input type="submit" value="Submit"/>  
<input type="reset">
</form>  
</body>  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html> 