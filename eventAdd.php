<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
         body {
        background-image: url("photo/img1.jpeg");
        background-repeat: no-repeat;
       
        font-family: "Lucida Console", Courier, monospace;
      }
    </style>
</head>
<body>
<?php include'nav.php'?>
    <nav class="navbar navbar-expand-lg navbar-light ">


        
        
        <div class="col-md-6">
            <h3><u>Add Events</u></h3>
        </div>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div>
                <ul class="navbar-nav mr-auto">
    
                    <li class="nav-item p-2">
                        <a class="nav-link text-white" href="DeleteEvent.php">
                            <h6><b>Delete Event</b></h6>
                        </a>
                    </li>
                    
    
                </ul>
            </div>
        </div>
    </nav>
    <a href="admin.php"><button>BACK</button></a>  
    <form method="POST" action="eventaddAction.php" enctype="multipart/form-data" class="offset-md-3 col-md-6">
        <table>
            <tr>
                <td>Event Photo</td>
                <td>:</td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td>Event Description</td>
                <td>:</td>
                <td><input type="text" name="txtDesc" size="50"></td>
            </tr>
            <tr>
                <td>Item</td>
                <td>:</td>
                <td><input type="text" name="txtItem" size="50"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td>:</td>
                <td><input type="date" name="txtTime" size="50"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="btn_up" value="Upload" class="form-control bg-success">

    </form>
   
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>