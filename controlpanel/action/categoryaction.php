<?php
include('../config/connection.php');
        session_start();
         $id = $_SESSION['USER_ID'];


if (isset($_POST['name'])) {
	$name = $_POST['name'];
    // echo $name;

}
// echo "INSERT INTO `categories`(`name`, `crated_by`) VALUES ('$name','$id')";


// exit;
$sql= "INSERT INTO `categories`(`name`,`crated_by`) VALUES ('$name','$id')";
$result = mysqli_query($conn,$sql);
header('Location: ../categorie.php');
// $count = mysqli_num_rows($result);

?>