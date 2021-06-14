<?php

include("db.php");
$date= date("Y-m-d");

$sql="SELECT * FROM tbl_event_add WHERE time  >= '$date'";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    body {
        background-image: url("photo/eventBG.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Lucida Console", Courier, monospace;
    }
    </style>
</head>

<body>
<?php include'navuser.php'?>

    <a href="user.php"><button>BACK</button></a>


    <div class="row align-items-center offset-md-2" >
    <?php
    $result=mysqli_query($conn,$sql);

foreach($result as $key=>$value){
$image_src=$value['image'];
$des=$value['description'];
$time=$value['time'];
?>

        <div class="col-md-6">
            
            <img src="event/<?php echo $image_src;?>" ; width='300' height='500'>
            <br>
            <h2 class="text-success bg-light"><?php echo $des;?></h2>
            <h2 class="text-white">Date :- <?php echo $time; ?></h2>
        </div>
        <div class="col-md-6">
        <a href='eventReg.php?regid=<?php echo $value['id'];?>'><button >Participate Here</button></a>
        </div>

        
        
<?php

}
?>     

</div>
        

        

    
    

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>