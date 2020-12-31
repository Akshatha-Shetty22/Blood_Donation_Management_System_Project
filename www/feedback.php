<?php
session_start();
require_once "pdo.php";
if(!isset($_SESSION['email']))
{
    die("Not logged in.");
}
// If the user requested logout go back to index.php
if ( isset($_POST['cancel']) ) {
    header('Location:index.php');
    return;
}

if(isset($_POST['desc_paragraph']))
{
    
    
     
    if(strlen($_POST['desc_paragraph'])<1)
    {
        $_SESSION['feederror']="Feedback cannot be empty";
        header('Location:feedback.php');
        return;
    }
   
else

{
    $sql="INSERT INTO review(email,desription) VALUES(:desc_email,:desc_paragraph)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
    ':desc_email'=>$_SESSION['email'],
    ':desc_paragraph'=>$_POST['desc_paragraph']));
    $_SESSION['feedsuccess']="Feedback received";
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

    if(isset($_SESSION['feederror']))
    {
        echo('<p style="color:red;">'.htmlentities($_SESSION['error'])."</p>\n");
        unset($_SESSION['feederror']);
    }
    
    ?>
<form method="post">
    <table>
        <tr><td><h4><label for="desc_paragraph">Enter Feedback:</label></h4></td>
            <td> <p><textarea  name="desc_paragraph" id="desc_paragraph" rows="8" cols="80"></textarea></p></td> </tr>
        </table><br>
<input type="submit" value="Submit" class="register">
<input type="submit" name="cancel" value="Cancel" class="register"><br><br>
    
</form>
    
    

        </div>


        </center>
    </div>
        
</body>
</html>





