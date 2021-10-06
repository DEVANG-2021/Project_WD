<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main {
            background-color: rgb(255, 255, 255);
            width: 350px;
            height: 400px;
            font-family: corbel;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* border-radius: 50px; */
            /* box-shadow: 1px 1px 20px rgb(250, 250, 250), -1px -1px 20px rgb(245, 245, 245); */
            /* border: solid 5px #000000; */
            transition: 0.3s;
        }

        input {
            display: block;
            margin: 10px;
        }


        .field {
            padding: 15px 20px 15px 20px;
            width: 300px;
            font-size: 15px;
            outline: none;
            border: none;
            border-radius: 10px;
            background-color: aliceblue;
            font-weight: 700;
            box-sizing: border-box;
            transition: 0.3s;
        }



        .field:focus {
            background-color: rgb(211, 240, 255);
            border-bottom: solid 2px #3dbd88;
        }

        .submit {
            padding: 15px 40px 15px 40px;
            background-color: #3dbd88;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            font-family: corbel;
            font-weight: 900;
            font-size: 15px;
        }


        .submit:hover {
            background-color: #278a61;
        }


        @media only screen and (max-width: 600px) {
            .main {
                width: 100%;
                height: 100%;
                box-shadow: none;
                border: none;

            }

            .field {
                padding: 20px 10px 20px 10px;
                width: 90%;
                font-size: 15px;
                outline: none;
                border: none;
                border-radius: 10px;
                background-color: aliceblue;
                font-weight: 700;
            }

            .submit {
                width: 90%;
                border-radius: 10px;

            }

        }
    </style>
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['name'])){
        // removes backslashes
 $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
 $name = mysqli_real_escape_string($con,$name);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE name='$name'
and password='$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['name'] = $name;
      header('Location: Admin.php');
  
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='lo.php'>Login</a></div>";
 }
    }else{
?>




<form action="" method="post" name="login">


<div class="main">

        <h2>Admin Login</h2>
        <input type="text" placeholder="Username" class="field" name="name" required>
        <input type="password" id="" placeholder="Password" class="field" name="password" required>
        <input type="submit" value="Login" class="submit" name="submit">
    </div>

</form>
</div>

<?php } ?>
</body>
</html>