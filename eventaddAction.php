<?php
include("db.php");

$desc=$_POST['txtDesc'];

$item=$_POST['txtItem'];
$time=$_POST['txtTime'];

if(isset($_POST['btn_up']));
{
    $name=time() .'_' .$_FILES['file']['name'];
    $target_dir="event/";
    $target_file=$target_dir.basename($_FILES['file']['name']);
    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extension_array=array("jpg","jpeg","png","gif");
    if(in_array($imageFileType,$extension_array))
    {
       
        $query="INSERT INTO  `tbl_event_add`(`image`,`description`,`item`,`time`) VALUES ('$name','$desc','$item','$time')";
    
        mysqli_query($conn,$query);
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
        echo "<script>
            alert('Event Uploaded Succesfuly');
            window.location.href='eventAdd.html';
            </script>";
    }
}
?>