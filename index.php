<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    a:link{
    text-decoration:none;
    }
    .container{
            margin-top: 10px;
             }
         .card{
            border:none;
            outline:none;
            margin-top:20px;
         }
         .card:hover{
            box-shadow: 5px 10px 18px rgb(82, 82, 146);
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
          .d-flex{
              margin:auto;
          }
          .header-content{
              margin-bottom:50px;
          }
          .footer{
              width:100%;
          }
    </style>
</head>
<body>
<nav class="navbar">
            <h1 class="logo">Pharmacy</h1>
            <ul class="nav-link">
                <li class="ctn"><a href="#home">Home</a></li>
                <li class="ctn"><a href="#Aboutus">About Us</a></li>
                <li class="ctn"><a href="#product">Products</a></li>
                
                <li class="ctn"><a href="#contact">Contact</a></li>
                
                 </ul>
                 <form class="d-flex"  action="search1.php" method="POST">
        <input class="form-control me-2" type="text" placeholder="Search for Product" name="ss">
        <button class="btn btn-primary" type="submit"  name="submit-search">Search</button>
      </form> 
        </nav>

        <img src="image/521077-200.png" class="menu-btn"/>
       <header>
           <div class="header-content" id="home">
               <h2>Welcome To our Pharmacy</h2>
               <div class="line"></div>
                <h1>Stay Healthy with our Company: Your Favourite Online Pharmacy and Healthcare Platform</h1>
                <a href="#Aboutus" class="ctn">About Us</a>
                
           </div>
       </header>

       <div class="container">
      <div class="row">
          <div id="product"><h1 style="color:rgb(82, 82, 146)">Products</h1></div>
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
               
               <section class="tours" id="Aboutus">
        <div class="row">
            <div class="content">
                <h1 style="color:rgb(82, 82, 146)">About Us</h1>
                <h2>Pharmacy: Your Favourite Online Pharmacy!</h2>
                 <div class="line"></div>
                 <p>Our Pharmacy Company is India's leading online chemist with over 2 lakh medicines available at the best prices. We are your one-stop destination for other healthcare products as well, such as over the counter pharmaceuticals, healthcare devices and homeopathy and ayurveda medicines.</p>
                  <a href="#" class="ctn">Home</a>
             </div>
         
                 <div class="image-gallery">
                 
                 </div>
           
        </div>
    </section>


    <section class="footer" id="contact">
        <p>D-120 Uday Nagar, gotri, Utcarsh Vidhyalay Vadodara, Gujarat, India. | Phone No. : 999987878 | Email : parmardev999@gmail.com</p>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-twitter"></a>
        </section>
        
       <script>
        const menubtn = document.querySelector('.menu-btn');
        const navlinks = document.querySelector('.nav-link');

        menubtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu');
        })
    </script>



</body>
</html>




