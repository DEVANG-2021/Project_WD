<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from product where id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">

<style>

.form{
width: 100%;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}
h1{
  color : white;
}
body{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-family: Calibri;
    text-decoration: none;
}
input
{
  background: none;
  width: 400px;
  height: 30px;
  border: solid 1px Tomato;
  margin-top: 5px;
  margin-bottom: 5px;
  width: 400px;
  border-radius: 3px;
  padding-left: 15px;
  font-size: 17px;
  margin-right: 10px;
}


label{
font-size: 18px;
}

#submit{
  width: 200px;
  height: 50px;
  background: #3dbd99;
  border: none;
}

select{
  margin-top: 5px;
  margin-bottom: 5px;
  width: 300px;
  height: 30px;
  border:solid 1px Tomato;
  border-radius: 3px;
}

#file{
  border:none;
}

@media only screen and (max-width: 950px) {
  input {
  width:99%;
  font-size: 15px;
  }

  label{
  font-size: 15px;
  }
}

h1{
  width: 100%;
  background: SlateBlue;
  height: 100px;
  margin: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
  margin-bottom: 30px;
}
</style>


<meta charset="utf-8">
<title>Update Product</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Product</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];


$file = $_FILES['image']; 

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];



$title =$_REQUEST['title'];
$price =$_REQUEST['price'];
$quantity =$_REQUEST['quantity'];
$q1 =$_REQUEST['q1'];
$q2 =$_REQUEST['q2'];
$p1 =$_REQUEST['r1'];
$p2 =$_REQUEST['r2'];


$category =$_REQUEST['category'];



$short_desc =$_REQUEST['short_desc'];
$long_desc =$_REQUEST['long_desc'];




$submittedby = $_SESSION["name"];

  $destfile = 'uploads/'.$filename;
 move_uploaded_file($filepath,$destfile);

$update="UPDATE product SET
img='".$destfile."',title='".$title."',short_desc='".$short_desc."', price='".$price."',quantity='".$quantity."',q1='".$q1."',q2='".$q2."',p1='".$p1."',p2='".$p2."',
long_desc='".$long_desc."',category='".$category."',submittedby='".$submittedby."' WHERE id='".$id."'";
$result = mysqli_query($con,$update) or die ( mysql_error());
$status = "Item Updated Successfully. </br></br>
<a href='admin.php'>View Updated item</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';

}else {
?>
<div id="main">

<form name="form" action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="new" value="1" />
<label>Product Image :<label><br>
<input type="file" id="file" name="image" placeholder="Enter Userid" value="<?php echo $row['img'];?>"><br>

<label> Product name :<label><br>
<input type="text" name="title"placeholder=" Product name" value="<?php echo $row['title'];?>"><br>
<label> Item Price :<label><br>
<input type="text" name="price" placeholder=" New Price" value="<?php echo $row['price'];?>"><br>
<label> Quantity :<label><br>
<input type="text" name="quantity" placeholder=" Quantity" value="<?php echo $row['quantity'];?>"><br>
<label> Quantity Variation 1 :<label><br>
<input type="text" name="q1" placeholder="  Quantity Variation 1 " value="<?php echo $row['q1'];?>"><br>
<label> Quantity Variation 2 :<label><br>
<input type="text" name="q2" placeholder="  Quantity Variation 2 " value="<?php echo $row['q2'];?>"><br>
<label> Price For 1st Variation :<label><br>
<input type="text" name="r1" placeholder=" Price For 1st Variation" value="<?php echo $row['p1'];?>"><br>
<label> Price For 2nd Variation :<label><br>
<input type="text" name="r2" placeholder=" Price For 2nd Variation" value="<?php echo $row['p2'];?>"><br>
<label> category :<label><br>
<select id="select" name="category" value="<?php echo $row['category'];?>">
<option value="Winter Product">Winter Product</option>

<option value="Fitness & Supplements">Fitness & Supplements</option>

<option value="Care Devices">Care Devices</option>
<option value="Personal Care">Personal Care</option>
<option value="BABY Care<">BABY Care</option>
<option value="Hair Care">Hair Care</option>
<option value="PET Care">PET Care</option>
<option value="FEMALE Care">FEMALE Care</option>
<option value="MAN Care">MAN Care</option>
</select><br>

<label> Write short Description :<label><br>
<input type="text" name="short_desc" placeholder="Enter Description" value="<?php echo $row['short_desc'];?>"><br>
<label> Write Long Description :<label><br>
<input type="text" name="long_desc" placeholder="Enter Description" value="<?php echo $row['long_desc'];?>"><br>

<p><input name="submit" id="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<?php } ?>
</div>
</div>
</body>
</html>

