<?php
require_once "pdo.php";
session_start();

if ( ! isset($_SESSION['email']) ) {
  $_SESSION['deleteerror'] = "Missing email";
  header('Location: edit.php');
  return;
}
if(isset($_SESSION['email']))
{
    $stmt = $pdo->prepare("SELECT email FROM review where email = :xyz");
$stmt->execute(array(":xyz" => $_SESSION['email']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row ==0 ) {
    $_SESSION['deleteerror'] = 'Bad value for email_id';
}
else
{
     
     $sqlc = "DELETE FROM review WHERE email = :zip";
    $stmt = $pdo->prepare($sqlc);
    $stmt->execute(array(':zip' => $_SESSION['email']));
    

}
    
 $stmt = $pdo->prepare("SELECT email FROM donor where email = :xyz");
$stmt->execute(array(":xyz" => $_SESSION['email']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row ==0 ) {
    $_SESSION['deleteerror'] = 'Bad value for email_id';
}
else
{
     
     $sqlb = "DELETE FROM donor WHERE email = :zip";
    $stmt = $pdo->prepare($sqlb);
    $stmt->execute(array(':zip' => $_SESSION['email']));
    

} 
    $stmt = $pdo->prepare("SELECT email FROM user where email = :xyz");
$stmt->execute(array(":xyz" => $_SESSION['email']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row ==0 ) {
    $_SESSION['deleteerror'] = 'Bad value for email_id';
}
else
{
     
     $sqlc = "DELETE FROM user WHERE email = :zip";
    $stmt = $pdo->prepare($sqlc);
    $stmt->execute(array(':zip' => $_SESSION['email']));
    
    $_SESSION['deletesuccess'] = 'Record deleted';
    header( 'Location: signup.php' ) ;
    return;
    
}
    
    
}





    


// Guardian: Make sure that user_id is present



?>
