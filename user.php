<?php
session_start();

if($_SESSION['name']== true)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
        background-image: url("photo/img5.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Lucida Console", Courier, monospace;
    }

    
    </style>
</head>
<body>
<?php include'navuser.php'?>
<div class="row">
    <div class="col-md-6 p-4">
        <a href="listEvent.php"><button>Check You'r Participation</button></a>
    </div>
    <div class="col-md-6 p-4">
        <marquee behavior="scroll" direction="left" scrolldelay="200"><h2 class="text-danger"><b>UPCOMING EVENTS</b></h2> <a href='eventDisplay.php' >click here</a></marquee>

    </div>
</div>



    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
<?php
}
else{
    echo "<script>
    alert('Your Not An Authorized Person');
    window.location.href='index.html';
   </script>";
}
?>