
<?php
 include'db.php';
?>

<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="pp.css">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />


   <style>
    a:link{
      text-decoration:none;
    }
    #big_addtocart{
      color:white;
    }
  </style>
     <body>

  

<?php

   $title = mysqli_real_escape_string($con,$_GET['title']);
   

 $sql="SELECT * FROM product WHERE title='$title'";
 $result = mysqli_query($con,$sql);
 $queryResults = mysqli_num_rows($result);

 if($queryResults > 0){
   while($rows = mysqli_fetch_assoc($result)){
      echo"<div id='p'>
<div id='block'>
<div id='container'>
<div id='photo'>  <img src=".$rows['img']." /></div>
<div id='photo_desc'>  ".$rows['title']."
<div id='info'> ".$rows['short_desc']."  
<div id='label'> ".$rows['price']."<span style='margin:0 0 0 10px;font-size:18px;color:darkorange'>".$rows['quantity']." </span></div>

<a href='#'><div id='pack_size'> ".$rows['q1']."  <span style='margin:0 10px 0 50px;font-size:18px;color:green'>".$rows['p1']." </span></div>
<a href='#'><div id='pack_size'> ".$rows['q2']."  <span style='margin:0 10px 0 50px;font-size:18px;color:green'>".$rows['p2']."</span></div>

<a href='#'><div id='big_addtocart' onclick='showme()'><i class='fa fa-shopping-cart' style='margin:0 20px 0px 0;color:white;'></i>BUY NOW</div></a>
</div>
</div>
        
<div id='container'>
<div id='main_desc'>
<h3>Information about  ".$rows['title']."</h3>
 ".$rows['long_desc']." 

</div>

";
        }
     }
?>
</div>
</div>
</div>
</div>



</body>
</html>
