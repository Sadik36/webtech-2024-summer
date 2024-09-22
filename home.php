<?php
require_once('../Models/allDatabase.php');
session_start();
if(empty($_SESSION['username']))
{
    header('location:login.php');
}

$res=data();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<h1>Home Page</h1>
 <h1>welcome <?php echo $_SESSION['username'];?></h1>
<br>

<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>

<table border="1">
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Code</th>
        <th>Product Details</th>
    </tr>
    <?php while($p=$res->fetch_assoc()){?>
    <tr>
        <td><?php echo $p['product_name'];?></td>
        <td><?php echo $p['product_price'];?></td>
        <td><?php echo $p['product_code'];?></td>
        <td><?php echo $p['product_detials'];?></td>
        <form action="../Controllers/homeController.php">
            <td><button name="delete" value="<?php echo $p['product_name']; ?>">Delete</button></td>
        </form>
        <form action="../Controllers/homeController.php" method="GET">
        <td><button name="edit" value="<?php echo $p['product_name']; ?>">Edit</button></td>
      </form>
    </tr>

    <?php } ?>
    
    
</table>
<br><br>

<form method="post" action="../Controllers/loginCheckController.php">
    <button name="logout">Logout</button>
  </form>
</body>
</html>