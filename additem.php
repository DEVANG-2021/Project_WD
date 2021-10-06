<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
  
  $file = $_FILES['image']; 

  $filename = $file['name'];
  $filepath = $file['tmp_name'];
  $fileerror = $file['error'];



$title =$_REQUEST['title'];

$short_desc =$_REQUEST['short_desc'];
$price =$_REQUEST['price'];
$quantity =$_REQUEST['quantity'];
$q1 =$_REQUEST['q1'];
$q2 =$_REQUEST['q2'];
$p1 =$_REQUEST['r1'];
$p2 =$_REQUEST['r2'];



$long_desc =$_REQUEST['long_desc'];
$category =$_REQUEST['category'];


    $submittedby = $_SESSION["name"];
 if($fileerror == 0){
      $destfile = 'uploads/'.$filename;
     move_uploaded_file($filepath,$destfile);
    
    $ins_query="INSERT INTO product
    (`img`,`title`,`short_desc`,`price`,`quantity`,`q1`,`q2`,`p1`,`p2`,`long_desc`,`category`,`submittedby`)VALUES
    ('$destfile','$title','$short_desc','$price','$quantity','$q1','$q2','$p1','$p2','$long_desc','$category','$submittedby')";
     mysqli_query($con,$ins_query)
     or die(mysql_error());
    $status = "New Item Inserted Successfully.
    </br></br><a href='admin.php'>View Inserted Record</a>";
    }

}
?>








<html>
<head>
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">

<style>
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
  color : white;
  height: 100px;
  margin: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
  margin-bottom: 30px;
}
</style>
</head>
<body>
<h1>Add Product</h1>
<form action="" method="POST" id="main"  enctype="multipart/form-data">
<input type="hidden" name="new" value="1" />
<label>Product Image :<label><br>
<input type="file"  name="image" id="file"><br>

<label> Product name :<label><br>
<input type="text" name="title"><br>
<label> Item Price :<label><br>
<input type="text" name="price"><br>
<label> Quantity :<label><br>
<input type="text" name="quantity"><br>
<label> Quantity Variation 1 :<label><br>
<input type="text" name="q1"><br>
<label> Quantity Variation 2 :<label><br>
<input type="text" name="q2"><br>
<label> Price For 1st Variation :<label><br>
<input type="text" name="r1"><br>
<label> Price For 2nd Variation :<label><br>
<input type="text" name="r2"><br>
<label> Category :<label><br>
<select name="category"><br>
<option value="Winter Product">Winter Product</option>

<option value="2">Fitness & Supplements</option>

<option value="3">Care Devices</option>
<option value="4">Personal Care</option>
<option value="5">BABY Care</option>
<option value="6">Hair Care</option>
<option value="7">PET Care</option>
<option value="8">FEMALE Care</option>
<option value="9">MAN Care</option>
</select><br>


<label> Write short Description :<label><br>
<input type="text" name="long_desc" ><br>

<label> Write Long Description :<label><br>
<input type="text" name="short_desc" style="height:100px; overflow:scroll"><br>

<input id="submit" name="submit" type="submit" value="Submit" />
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</body>
</html>
