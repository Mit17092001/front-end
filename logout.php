<?php
    session_start();
    if(isset($_SESSION['name']))
    unset($_SESSION['name']);
    unset($_SESSION['password']);
    unset($_SESSION['No']);
    unset($_SESSION['alert']);
    header("location:index.php");
?>

