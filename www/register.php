<?php
session_start();
require_once "pdo.php";

// If the user requested logout go back to index.php
if ( isset($_POST['cancel']) ) {
    header('Location:index.php');
    return;
}

 if(isset($_POST['email']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['bloodgrp']) && isset($_POST['city']) && isset($_POST['address']))
{
    if(strlen($_POST['email'])<1 && strlen($_POST['age'])<1 && strlen($_POST['gender'])<1 && strlen($_POST['bloodgrp']) && strlen($_POST['city']) && strlen($_POST['address']))
    {
        $_SESSION['error']="All values are required";
        header('Location:register.php');
          return;
            
    }
     else if(strpos($_POST['email'],'@')==false)
    {
        $_SESSION['error']="Email must have at sign (@)";
        header('Location:register.php');
        return;
    }
    
      else if ( strlen($_POST['city']) < 1)
{
    $_SESSION['error']="All values are required";
    header('Location:register.php');
          return;
}
    else if(strlen($_POST['address'])<1)
    {
        $_SESSION['error']="All values are required";
        header('Location:register.php');
        return;
    }
    else if(!is_numeric($_POST['age'])||($_POST['age'])<18)
{
    $_SESSION['error']="Age must be numeric and above 18yrs.";
        header('Location:register.php');
        return;
}
   
else

{
    $sql="INSERT INTO donor (email,age,gender,bloodgrp,location,address) VALUES(:email,:age,:gender,:bloodgrp,:city,:address)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
    ':email'=>$_POST['email'],
    ':age'=>$_POST['age'],
    ':gender'=>$_POST['gender'],
    ':bloodgrp'=>$_POST['bloodgrp'],
        ':city'=>$_POST['city'],
        ':address'=>$_POST['address']
    
    ));
    $_SESSION['success']=" Registration Successful";
    echo '<script>alert("Registration Successful");</script>';
    if(isset($_SESSION['success']))
    {
        header('Location:index.php');
        return;
    }
    
    
    
}
     
}
           
    




?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
    
<meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<title>Registration Page</title>
    <style>

    #reg{
        background-color: white;
        margin-left: 10%;
        margin-right: 10%;
    }
    table
    {
        border-collapse: separate;
        border-spacing: 0 15px;
    }
    
    .register{
        width: 100px;
        height:40px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        background-color: crimson;
        color:white;
        
    }
    
    </style>
</head>

<?php require_once "bootstrap.php";
    ?>

<body style="background-color: darkgrey;">
<div class="container">


    
    
    <br>
   <center> <h1 style="color:crimson">DONOR REGISTRATION PAGE</h1></center>
    <br>
    <center>
<div id="reg">

    <br>
<img src="img/hero2.jpg" height="300px" width="300px">
    <br>
    <br><br>
<?php

    if(isset($_SESSION['error']))
    {
        echo('<p style="color:red;">'.htmlentities($_SESSION['error'])."</p>\n");
        unset($_SESSION['error']);
    }
    
    ?>
<form method="post">
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label">Email:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                </div>
            <div class="form-group row">
                <label for="age" class="col-md-2 col-form-label">Age:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                </div>
                </div>
            <div class="form-group row">
                <label  class="col-md-2 col-form-label">Gender:</label>
                <div class="col-md-4">
                <select class="form-control" name="gender">
                    <option value="F">F</option>
                    <option value="M">M</option>
                    </select>
                </div>
                </div>
                
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Blood-Group:</label>
                <div class="col-md-4">
                <select class="form-control" name="bloodgrp">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    </select>
                </div>
                </div>
                <div class="form-group row">
                <label for="city" class="col-md-2 col-form-label">City:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                </div>
                </div>
                <div class="form-group row">
                <label for="address" class="col-md-2 col-form-label">Address:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
                </div>
            
                <center><input type="submit" value="Register" class="btn btn-lg " style="background-color:lightblue;">&nbsp;&nbsp;
                <input type="submit" name="cancel" value="Cancel" class="btn btn-lg" style="background-color:lightblue;"><br><br><br><br></center>
            </form>
    
    

        </div>


        </center>
    </div>
    <br><br><br><br><br>    
</body>
</html>





