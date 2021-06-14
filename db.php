<?php
$servername = "localhost";
$username = "root";
$password = "Jithu_root9";
$dbname="db_club_mang";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection Faild" .$conn->error);
}
?>