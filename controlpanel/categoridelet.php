<?php
include('config/connection.php');
session_start();

 $cat_id=$_GET['id'];
 $sql="DELETE FROM `categories` WHERE `id`=$cat_id";
 $result = mysqli_query($conn,$sql);
if(isset($result)){

    $_SESSION['delemsg']=true;
}

header('Location: categorie.php');



?>