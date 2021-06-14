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
<div class="col-md-3">
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
                <a class="nav-link text-white " href="Register.php">
                    <h6><b>New Member Registration</b></h6>
                </a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link text-white " href="img_view.php">
                    <h6><b>Galary</b></h6>
                </a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link text-white " href="about.php">
                    <h6><b>About us</b></h6>
                </a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link text-white " href="contact.php">
                    <h6><b>Contact</b></h6>
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