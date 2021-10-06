<?php include "db.php"; ?>
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
        .container{
            margin-top: 10px;
             }
         .card{
            border:none;
            outline:none;
            margin-top:20px;
         }
         .card:hover{
            box-shadow: 5px 10px 18px #888888;
            cursor:pointer;
         }
         p{
            font-family: "Times New Roman", Times, serif;
            color : black;
         }
         a:link {
             text-decoration: none;
          }
          h6{
              color:black;
          }

        </style>
  </head>
  <body>
      <div class="container">
      <div class="row">
          
                <?php
            $sql = "SELECT * FROM product";
            $result = mysqli_query($con,  $sql);
               $queryResults = mysqli_num_rows($result);
            
              if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($result)){     
                    if($rows['id']){
                    echo"
                    
                    <div class='col-md-3 col-sm-4'>
                    <a href='v1.php?title=".$rows['title']." ' style='text-decoration:none;'>
              <div class='card text-center'> 
           
                <div class='card-block'>
                    <img src=".$rows['img']." class='image-fluid'>
                    <div class='card-title'>
                     <p> ".$rows['title']."</p>
                    </div>
                    <div class='card-text'>
                    <h6> Rs.".$rows['price']."</h6>
                </div>
                     </a>
                    </div>
                    </div>   
                    </div> ";
                    }
                }
            }
                    ?>
               
       




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <!--product card-->
  

</body>
</html>