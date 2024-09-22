<?php
require_once('database.php');

function auth($username,$password)
{
    $conn=con();
    $sql="select * from user_data where user_name='$username' and user_pass='$password'";
    $resAuth=mysqli_query($conn,$sql);
    return $resAuth;
}
function data()
{
	$conn=con();
	$sql1="select * from `product`";
	$res=mysqli_query($conn,$sql1);
	return $res;
}
function delete($productName)
{
    $conn=con();
    $sql2="delete from product where product_name='$productName'";
    $delete=mysqli_query($conn,$sql2);
    return $delete;
}
function edit($productName)
{
    $conn=con();
    $sql3="select * from product where product_name='$productName'";
    $edit=mysqli_query($conn,$sql3);
    return $edit;
}
function update($id,$productName,$productPrice,$productCode,$productDetails)
{
	$conn=con();
	$sql4="update product set 
    Id='$id',product_name='$productName', product_price='$productPrice', product_code='$productCode' where product_details='$productDetails'";
	$update=mysqli_query($conn,$sql4);
	return $update;
}
function registration($UserName,$email,$userPassword,$skills,$gender,$city,$bio)
{
    $conn=con();
    $sql5= "INSERT INTO `user_data` ( `user_name`, `user_email`, `user_pass`, `user_skills`, `user_gender`, `user_city`, `user_bio` ,`Registration_Time`) VALUES ('$UserName', '$email', '$userPassword', '$skills', '
    $gender', '$city', '$bio',current_timestamp())";

    $result = mysqli_query($conn, $sql5);
    return $result;
}
function productInsert($productName,$productPrice,$productCode,$productDetails){
    $conn=con();
    $sql6="INSERT INTO `product` ( `product_name`, `product_price`, `product_code`,`product_details`) VALUES ('$productName','$productPrice','$productCode','$productDetails')";
    $result2 = mysqli_query($conn, $sql6);
    return $result2;
}
?>