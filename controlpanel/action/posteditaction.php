<?php
include('../config/connection.php');

if(isset($_POST['edit_submit'])){

        $id=$_POST['xid'];


        $title=$_POST['title'];
        $discription=$_POST['discription'];
        // $qury= mysqli_query(categorie ,UPDATE `categories` SET `name`='[value-2]'WHERE id)
        $query = "UPDATE forms SET title = '$title', discription = '$discription' WHERE id = '$id' ";
        $sql = mysqli_query($conn,$query);
        if($sql){
                header("location: ../view_post.php");
        }
        else{
                echo 'check query';
        }

}

?>