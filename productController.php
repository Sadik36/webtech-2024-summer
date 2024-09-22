<?php
include_once('../Models/allDatabase.php');


$productName = $_POST['p_name'];
$productPrice = $_POST['p_price'];
$productCode=$_POST['p_code'];
$productDetails = $_POST['p_details'];

$status=productInsert($productName,$productPrice,$productCode,$productDetails);

if($status){
    echo "Product Inserted Successfull";
}
else{
    echo "Product Inserted Failed";
}
?>
<br><br><br>
<form>
    <a href="../Views/home.php"> Show Products.....</a>
</form>