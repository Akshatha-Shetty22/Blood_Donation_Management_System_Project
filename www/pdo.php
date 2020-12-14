<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=blood_management','blood','donate');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>