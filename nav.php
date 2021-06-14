<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    nav {
        background-color: rgba(11,110,248, 0.6);
        color:#ffffff;
        
        font-family: "Times New Roman", Times, serif;
    }

    ul {
        font-size: 1rem;
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;
     

    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="col-md-4">
    <h3>CAPITOL ARTS AND SPORTS CLUB</h3>
</div>
<div class="col-md-2">
    <h4>WELCOME <?php echo $_SESSION['name']; ?></h4>

</div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div>
        <ul class="navbar-nav mr-auto">

            <li class="nav-item p-2">
                <a class="nav-link text-white" href="view_details.php">
                    <h6><b>View Members</b></h6>
                </a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link text-white " href="manipulateMeb.php">
                    <h6><b>Manipulate Details</b></h6>
                </a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link text-white " href="activities.html">
                    <h6><b>Galary</b></h6>
                </a>
            </li>
            <li class="nav-item p-2">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Event
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="eventAdd.php">Add Event</a>
                        <a class="dropdown-item" href="Report.php">Generate Event Report</a>
                        <a class="dropdown-item" href="EventregMeb.php">Register Members Delete</a>
                 </div>
            </div>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link text-white" href="reportgen.php">
                    <h6><b>Report</b></h6>
                </a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link text-white" href="logout.php">
                    <h6><b>Log Out</b></h6>
                </a>
            </li>

        </ul>
    </div>
</div>
</nav>
</body>
</html>