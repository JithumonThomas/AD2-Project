<?php
include("db.php");

$desc=$_POST['txtDesc'];


if(isset($_POST['btn_up']));
{
    $name=time() .'_' .$_FILES['file']['name'];
    $target_dir="image/";
    $target_file=$target_dir.basename($_FILES['file']['name']);
    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extension_array=array("jpg","jpeg","png","gif");
    if(in_array($imageFileType,$extension_array))
    {
       
        $query="INSERT INTO  `tbl_photo_upload`(`image`,`description`) VALUES ('$name','$desc')";
    
        mysqli_query($conn,$query);
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
        echo "<script>
            alert('Image Succesfuly Added');
            window.location.href='activities.html';
            </script>";
        
    }
}
?>