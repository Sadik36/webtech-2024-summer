<?php
session_start();
require_once('../Models/allDatabase.php');
if(isset($_GET['delete'])){
    $productName=$_GET['delete'];
    $status=delete($productName);
    if($status){
        header('location:../Views/home.php');
        $_SESSION['mess']="Deleted";
    }
}
if(isset($_GET['edit'])){
    $id1=$_GET['edit'];
   header("location:../Views/edit.php?id={$id1}");
   }
   if(isset($_GET['update']))
   {
    $id=$_GET['id'];
    $productName=$_GET['p_name'];
    $productPrice=$_GET['p_price'];
    $productCode=$_GET['p_code'];
    $productDetails=$_GET['p_details'];
    $res=update($id,$productName,$productPrice,$productCode,$productDetails);
    if($res){
      header("location:../Views/home.php");
    }
  
    }


?>
