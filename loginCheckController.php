<?php
require_once('../Models/allDatabase.php');
session_start();
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username || $password)){
        $_SESSION['Error']="Enter UserName & Password";
        header('location:../Views/login.php');
    }

    $status = auth($username,$password);
    if(mysqli_num_rows($status)==1)
    {
        header('location:../Views/home.php');
        $_SESSION['username']=$username;
    }
    else{
        $_SESSION['Error']="Invalid Username or Password";
        header('location: ../Views/login.php');
    }
}
if(isset($_POST['logout']))
{
	unset($_SESSION['username']);
	header('location: ../Views/login.php');
}
?>