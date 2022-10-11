<?php
include('config/connection.php');
session_start();

 $cat_id=$_GET['id'];
 $sql="DELETE FROM `forms` WHERE `id`=$cat_id";
 $result = mysqli_query($conn,$sql);
if(isset($result)){

    $_SESSION['delemsg']=true;
}

header('Location: view_post.php');



?>