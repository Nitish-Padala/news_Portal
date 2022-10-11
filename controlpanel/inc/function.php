<?php
session_start();

if(!isset($_SESSION['USER_ID'])){
    header('Location: index.php');
}

?>