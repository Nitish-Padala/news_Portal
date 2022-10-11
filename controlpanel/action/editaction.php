<?php
include('../config/connection.php');

if(isset($_POST['edit_submit'])){

        $id=$_POST['xid'];


        $name=$_POST['name'];
        // $qury= mysqli_query(categorie ,UPDATE `categories` SET `name`='[value-2]'WHERE id)
        $query = "UPDATE categories SET name = '$name' WHERE id = '$id'";
        $sql = mysqli_query($conn,$query);
        if($sql){
                header("location: ../categorie.php");
        }
        else{
                echo 'check query';
        }

}

?>