<?php include "db.php"; ?>
<?php include "auth.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <!-- CSS only -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
  
.img-fluid {
      width:150px;
      height:150px;
  }
        </style>
  </head>
  <body>
  <?php include "navbar1.php"; ?>  
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">View</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  
  <tbody>
  
  <?php
               $sql="SELECT * FROM product ";
               $result = mysqli_query($con,$sql);
               $queryResults = mysqli_num_rows($result);

              if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($result)){
     
                   echo"<tr>
                   <td class='w-25'>
                   <img src=".$rows['img']." class='img-fluid img-thumbnail' alt='Sheep'>
               </td>
                   <td>".$rows['title']."</td>
                   <td>".$rows['price']."</td>
                   <td>".$rows['category']."</td>
                   <td><button type='button' class='btn btn-success' ><a href='v1.php?title=".$rows['title']."' style='text-decoration:none;color:white'>View</a></button></td>
                   <td><button type='button' class='btn btn-info' ><a href='edit1.php?id= ".$rows['id']."' style='text-decoration:none;color:white'>Update</a></button></td>
                   <td><button type='button' class='btn btn-danger' ><a href='delete1.php?id= ".$rows['id']."' onclick='return myfunc()' style='text-decoration:none;color:white'>Delete</a></button></td>
                   </tr>";
                }
              }
                     
    ?>  
   </tbody>
</table>

 <script>
 function myfunc(){
  return confirm("Are you sure you want to delete this record ?");
 }
</script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>