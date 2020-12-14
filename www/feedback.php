<?php
session_start();
require_once "pdo.php";

// If the user requested logout go back to index.php
if ( isset($_POST['cancel']) ) {
    header('Location:index.php');
    return;
}

if(isset($_POST['desc_name']) && isset($_POST['desc_email']) && isset($_POST['desc_phone']) && isset($_POST['desc_paragraph']))
{
    if(strlen($_POST['desc_name'])<1 && strlen($_POST['desc_email'])<1 && strlen($_POST['desc_phone'])<1 && strlen($_POST['desc_event']))
    {
        $_SESSION['error']="All values are required";
        header('Location:feedback.php');
          return;
            
    }
     else if(strpos($_POST['desc_email'],'@')==false)
    {
        $_SESSION['error']="Email must have at sign (@)";
        header('Location:feedback.php');
        return;
    }
    
      else if ( strlen($_POST['desc_name']) < 1)
{
    $_SESSION['error']="All values are required";
    header('Location:feedback.php');
          return;
}
    else if(strlen($_POST['desc_paragraph'])<1)
    {
        $_SESSION['error']="All values are required";
        header('Location:feedback.php');
        return;
    }
    else if(!is_numeric($_POST['desc_phone'])||strlen($_POST['desc_phone'])!=10)
{
    $_SESSION['error']="Contact no. must be numeric and valid.";
        header('Location:feedback.php');
        return;
}
   
else

{
    $sql="INSERT INTO description(desc_name,desc_email,desc_phone,desc_paragraph) VALUES(:desc_name,:desc_email,:desc_phone,:desc_paragraph)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
    ':desc_name'=>$_POST['desc_name'],
    ':desc_email'=>$_POST['desc_email'],
    ':desc_phone'=>$_POST['desc_phone'],
    ':desc_paragraph'=>$_POST['desc_paragraph']));
    $_SESSION['success']=" Registration Successful";
    header('Location:index.php');
    return;
    
    
}
     
}

   




?>
<!DOCTYPE html>
<html>
<head>

    
<meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<title>Feedback Page</title>
    <style>

    #reg{
        background-color:white;
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
        background-color:skyblue;
        color:white;
        
    }
    
    </style>
</head>

<?php require_once "bootstrap.php";
    ?>

<body style="background-color:palevioletred;">
<div class="container">


    
    
    <br>
   <center> <h1 style="color:white">FEEDBACK PAGE</h1></center>
    <br>
    <center>
<div id="reg">

    <br><br>

<?php

    if(isset($_SESSION['error']))
    {
        echo('<p style="color:red;">'.htmlentities($_SESSION['error'])."</p>\n");
        unset($_SESSION['error']);
    }
    
    ?>
<form method="post">
    <table>
        <tr><th><h4><label for="desc_name">Name:</label></h4></th>
    <th><p><input type="text" name="desc_name" id="desc_name" style="width:200px;"/></p></th></tr>
        <tr><td><h4><label for="desc_email">Email:</label></h4></td>
        <td><p><input type="text" name="desc_email" id="desc_email" "width:200px;"/></p></td></tr>

        <tr><td><h4><label for="desc_phone">Contact No:</label></h4></td>
   <td> <p><input type="text" name="desc_phone" id="desc_phone" "width:200px;"/></p></td></tr>
        <tr><td><h4><label for="desc_paragraph">Review:</label></h4></td>
            <td> <p><textarea  name="desc_paragraph" id="desc_paragraph" rows="8" cols="50"></textarea></p></td> </tr>
        </table><br>
<input type="submit" value="Submit" class="register">
<input type="submit" name="cancel" value="Cancel" class="register"><br><br>
    
</form>
    
    

        </div>


        </center>
    </div>
        
</body>
</html>





