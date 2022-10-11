<?php
include('../config/connection.php');

session_start();

if(isset($_POST['submit'])){

    $email=$_POST['email'];

   $password=$_POST['password'];
   

   $sql ="SELECT * FROM user WHERE email ='$email' and password ='$password'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
    print_r($result);
    if($count==1){

        $data=mysqli_fetch_assoc($result);
        print_r($data);

        $_SESSION['USER_ID']=$data['id'];
        $_SESSION['USER_NAME']=$data['name'];

        header('Location: ../dashboard.php');
    }
    else{

        $_SESSION['msg']=true;

        header('Location: ../index.php');
    }





}



?>