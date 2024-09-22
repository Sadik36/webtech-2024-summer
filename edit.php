<?php
require_once('../Controllers/homeController.php');
if(empty($_SESSION['username']))
{
   header("location:login.php");
}

$id = $_GET['id'];

$res=edit($id);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
  <h1>Edit Page</h1>
<br>



<?php while($p=$res->fetch_assoc()) { ?>
  <form method="get" action="../Controllers/homeController.php">

  <label>Product Id :</label>
  <input type="text" name="id" value="<?php echo $p['Id']; ?>"><br><br>
  <label>Product Name : </label>
    <input type="text"name="p_name"value="<?php echo $p['product_name']?>"><br><br> 
  <label>Product Price : </label>
    <input type="number" name="p_price" value="<?php echo $p['product_price']?>"><br><br> 
    <label>Product Code : </label>
    <input type="text" name="p_code" value="<?php echo $p['product_code']?>"><br><br>
    <label>Product Description : </label>
    <textarea name="p_details"><?php echo $p['product_detials']?></textarea><br><br>
 
   <button name="update">Update</button><br>
   </form>
   <?php } ?>
    
    <br><br>
  <form method="post" action="../Controllers/logCheckController.php">
    <button name="logout">Logout</button>
  </form>
   
</body>
</html>