<?php
include('../config/connection.php');
        session_start();
         $id = $_SESSION['USER_ID'];
if(isset($_POST['submit'])){
   
    // echo "<pre>";
    // print_r($_POST);
    // exit;
    $title= $_POST['title'];
    $discription= $_POST['discription'];
    $breaking_news= $_POST['breaking_news'];
    $categori= $_POST['category'];
    // if(isset($_POST['main'])){
    //     $main=1;
    // }
    // else{
    //     $main=0;
    // }
    // if(isset($_POST['c'])){
    //     $top_stories=1;
    // }
    // else{
    //     $top_stories=0;
    // }
    // if(isset($_POST['trending'])){
    //     $trending=1;
    // }
    // else{
    //     $trending=0;
    // }
    $main=$_POST['main'];
    $top_stories=$_POST['top_stories'];
    $trending=$_POST['trending'];   
   

    if(isset($_FILES['image'])){
        $imgtitle = $_FILES["image"];
        $pname = rand(1000,10000).$_FILES["image"]["name"];
        // echo $info;
        // exit;
        $tname = $_FILES["image"]["tmp_name"];
        $uploads_dir = '../../media/post_image/';
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
         }

    // $id = $_POST ['title'];
    // echo(" INSERT INTO forms ( `title` ,`discription`,`breaking_news`,`categorie_id`,`image`,`main`,`top_stories`,`trending`,`created_by`) VALUES ( '$title','$discription','$breaking_news','$categori','$pname','$main','$top_stories','$trending','$id') ");
    // exit;
    $query = " INSERT INTO `forms` ( `title` ,`discription`,`breaking_news`,`categorie_id`,`image`,`main`,`top_stories`,`trending`,`created_by`) VALUES ( '$title','$discription','$breaking_news','$categori','$pname','$main','$top_stories','$trending','$id') ";
    
    $sql = mysqli_query($conn,$query);
    // echo ($sql);
    // exit;
    if($sql){
        header("location:../post.php");
    }
    else{
        echo 'check query';
    }





}
?>