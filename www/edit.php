<?php
require_once "pdo.php";
session_start();
if ( isset($_POST['cancel']) ) {
    header('Location: index.php');
    return;
}

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['age']) && isset($_POST['location'])
  && isset($_POST['address']) && isset($_POST['available']))
{
   
    
    if(strlen($_POST['fname'])<1 && strlen($_POST['lname'])<1 && strlen($_POST['phone'])<1 && strlen($_POST['age'])<1
     && strlen($_POST['location'])<1 && strlen($_POST['address'])<1 && strlen($_POST['avaiable'])<1)
    {
        
        $_SESSION['editerror']="All fields are required";
        header("Location: edit.php");
          return;
            
    }
    
     if ( strlen($_POST['fname']) < 1)
{
    $_SESSION['editerror']="fname is required.";
    header("Location: edit.php");
          return;
}
     if(strlen($_POST['lname'])<1)
    {
        $_SESSION['editerror']="lname is required";
       header("Location: edit.php");
        return;
    }
    if(!is_numeric($_POST['age'])|| strlen($_POST['age'])<1)
{
    $_SESSION['editerror']="Age is required must be numeric.";
        header("Location: edit.php");
        return;
}
    if ( strlen($_POST['location']) < 1)
{
    $_SESSION['editerror']="Location is required.";
    header("Location: edit.php");
          return;
}
    if ( strlen($_POST['address']) < 1)
{
    $_SESSION['editerror']="Address is required.";
    header("Location: edit.php");
          return;
}
    if ( strlen($_POST['available']) < 1)
{
    $_SESSION['editerror']="Availability is required.";
    header("Location: edit.php");
          return;
}
    if(!is_numeric($_POST['phone'])|| strlen($_POST['phone'])!=10)
{
    $_SESSION['editerror']="Phone is required must be numeric.";
        header("Location: edit.php");
        return;
}

    
      $sqli = "UPDATE user SET fname = :fname,
            lname = :lname, phone = :phone 
            WHERE email = :email";
    $stmt = $pdo->prepare($sqli);
    $stmt->execute(array(
        ':fname' => $_POST['fname'],
        ':lname' => $_POST['lname'],
        ':phone' => $_POST['phone'],
        
        
        ':email' => $_SESSION['email']));
     
        
 

    $sql = "UPDATE donor SET age = :age,
            location = :location, address = :address,
            available =:available 
            WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':age' => $_POST['age'],
        ':location' => $_POST['location'],
        ':address' => $_POST['address'],
        ':available' => $_POST['available'],
        
        ':email' => $_SESSION['email']));
   
    
    $_SESSION['editsuccess']="Record updated";
    
    
    if(isset($_SESSION['editsuccess']))
    {
        
        header('Location:index.php');
        return;
    }
   
}

// Guardian: Make sure that user_id is present
if ( ! isset($_SESSION['email']) && !isset($_SESSION['donor']) ) {
  $_SESSION['editerror'] = "Missing email id";
  header('Location: index.php');
  return;
}

$stmt = $pdo->prepare("SELECT * FROM donor,user where user.email=donor.email and user.email = :xyz");
$stmt->execute(array(":xyz" => $_SESSION['email']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row ==0 ) {
    
    header( 'Location: index.php' ) ;
    return;
}

// Flash pattern
$fn = htmlentities($row['fname']);
$ln = htmlentities($row['lname']);
$ph = htmlentities($row['phone']);

$ag = htmlentities($row['age']);
$lo = htmlentities($row['location']);
$ad = htmlentities($row['address']);
$av=htmlentities($row['available']);
$em = $row['email'];
?>
<html><head><title>Edit Page</title></head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
    <body style="background-color:lightgrey;">
<h1><p><center>EDIT ACCOUNT</center></p></h1><br><br><br><br>
        
<?php
if ( isset($_SESSION['editerror']) ) {
    echo '<p style="color:red">'.$_SESSION['editerror']."</p>\n";
    unset($_SESSION['editerror']);
}
?>
        <div class="container">
            <b>
        <form method="post">
            <div class="form-group row">
                <label for="fname" class="col-md-2 col-form-label">First Name:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="fname" value="<?= $fn ?>">
                </div>
                </div>
            <div class="form-group row">
                <label for="lname" class="col-md-2 col-form-label">Last Name:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="lname" value="<?= $ln ?>">
                </div>
                </div>
            <div class="form-group row">
                <label for="phone" class="col-md-2 col-form-label">Phone:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="<?= $ph ?>">
                </div>
                </div>
            
            <div class="form-group row">
                <label for="age" class="col-md-2 col-form-label">Age:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="age" name="age" placeholder="Age" value="<?= $ag ?>">
                </div>
                </div>
                
                <div class="form-group row">
                <label for="city" class="col-md-2 col-form-label">Location:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="location" name="location"  value="<?= $lo ?>">
                </div>
                </div>
                <div class="form-group row">
                <label for="address" class="col-md-2 col-form-label">Address:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="address" name="address"  value="<?= $ad ?>">
                </div>
                </div>
                <div class="form-group row">
                <label  class="col-md-2 col-form-label">Availability:</label>
                <div class="col-md-4">
                <input type="text" class="form-control" id="available" name="available"  value="<?= $av ?>">
                </div>
                </div>
            
                <center><input type="submit" value="Save" class="btn btn-lg " style="background-color:lightblue;">&nbsp;&nbsp;
                <input type="submit" name="cancel" value="Cancel" class="btn btn-lg" style="background-color:lightblue;"><br><br><br><br></center>
            </form>
                </b>
            <center><br><center><a href="delete.php"><button class="btn text-white btn-lg" style="background-color:firebrick;">DELETE ACCOUNT</button></a></center></center>
        </div>
    </body>
</html>