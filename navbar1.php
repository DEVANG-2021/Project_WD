<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    a:link{
    text-decoration:none;
    color:white;
}
.btn {
  margin-left:5px;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Pharmacy Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        
        
      </ul>

      
        <button class="btn btn-primary" type="submit"  name="submit-search"><a href='additem.php' style='text-decoration:none;color:white'>Add New Product</a></button>
        <button class="btn btn-primary" type="submit"  name="submit-search"><a href='logout.php' style='text-decoration:none;color:white'>LogOut</a></button>
      
    </div>
  </div>
</nav>

<div class="container-fluid mt-3" id="home">
<h1>Products</h1>
</div>

</body>
</html>
