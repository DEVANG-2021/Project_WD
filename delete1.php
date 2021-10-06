<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM product WHERE id='$id'"; 
$result = mysqli_query($con,$query);
header('Location: admin.php');
?>






