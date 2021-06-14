<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background-color:darkturquoise;
            font-family: "Lucida Console", Courier, monospace;
        }
        td {
             height: 40px;
            }
    </style>
</head>
<body>
<?php include'navuser.php'?>
    <a href="user.php"><button>BACK</button></a>

    <center><h1><u> NEW MEMBER REGISTRATION </u></h1>
    <form method="post" action="regMebAct.php">  
        <table>
            <tr>
                <td>Firstname</td>
                <td>:</td>
                <td><input type="text" name="firstname" size="15"/></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td>:</td>
                <td> <input type="text" name="lastname" size="15"/></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><textarea cols="50" rows="5" value="address" name="txtAddress">  
                </textarea> </td>
            </tr>
            <tr>
                <td>District</td>
                <td>:</td>
                <td>
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
                    <option value="kozhikkode">kozhikkode</option>  
                    <option value="vayanad">vayanad</option>
                    <option value="kannur">kannur</option>
                    <option value="kasargode">kasargode</option>  
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <input type="radio"  name="gender" value="male"> Male  
                    <input type="radio" name="gender" value="female"> Female 
                    <input type="radio" name="gender" value="others"> Other  
                </td>
            </tr>
            
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="text" name="phone" size="10"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td> <input type="email" id="email" name="email"/></td>
            </tr>
        </table>  
        <br> <br> 
        <input type="submit" value="Submit"/>  
        <input type="reset">
        </form> </center>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>