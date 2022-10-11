<?php
session_start();
unset($_SESSION['USER_ID']);
header('Location: index.php');

?>