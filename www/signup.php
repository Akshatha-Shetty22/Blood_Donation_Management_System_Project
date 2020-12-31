<?php 
session_start();
require_once "pdo.php";
if( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: startpage.html");
    return;
}
if(isset($_SESSION['email_present']))
{
    echo "<script>alert('Account already present');</script>";
    unset($_SESSION['email_present']);
}
if(isset($_SESSION['deletesuccess']))
            {
                echo '<script>alert("Record Deleted");</script>';
                unset($_SESSION['deletesuccess']);
            }
if ( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['phone'])  ) {
    unset($_SESSION['who']);
    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1|| strlen($_POST['lname'])<1 || strlen($_POST['phone'])<1) {
        $_SESSION['signuperror']= "All fields are required";
        header('Location:signup.php');
        return;
    }
     else if(strpos($_POST['email'],'@')==false)
    {
        $_SESSION['signuperror']="Email must have at sign (@)";
        header('Location:signup.php');
        return;
    }
    else if(strlen($_POST['phone'])<10 || !is_numeric($_POST['phone']))
    {
        $_SESSION['signuperror']="Phone number must be valid and numeric";
        header('Location:signup.php');
        return;
    }
    else
    {
        $stmt=$pdo->query("SELECT email FROM user");
             while($row=$stmt->fetch(PDO::FETCH_ASSOC))
             {
            if ( ($row['email']==$_POST['email']) ) {
            // Redirect the browser to game.php
            $_SESSION['email_present']="ALready a user";
                
                header('Location:signup.php');
                return;
            }
             }
        
            
            $sql="INSERT INTO user (email,password,fname,lname,phone) VALUES(:email,:pass,:fname,:lname,:phone)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
    ':email'=>$_POST['email'],
    ':pass'=>$_POST['pass'],
    ':fname'=>$_POST['fname'],
    ':lname'=>$_POST['lname'],
        ':phone'=>$_POST['phone']
    
    ));
    $_SESSION['signupsuccess']="You have successfully Signed in";
        $_SESSION['email']=$_POST['email'];
    echo '<script>alert("You have successfully Signed in");</script>';
    if(isset($_SESSION['signupsuccess']))
    {
        header('Location:index.php?name='.htmlentities($_SESSION['email']));
        return;
    }
    
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<style>
		form {
			border: 3px solid #f1f1f1;
			width:30%;
			margin-left:450px;
			margin-top:40px;
		}

		
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		input[type=password]:hover{
			transition: 0.1s ease-in;
			background-color: #F7F7F7;
		}
		input[type=text]:hover{
			transition: 0.1s ease-in;
			background-color: #F7F7F7;
		}

		
		button {
			background-color: #13A818;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			font-size: 20px; 
		}

		
		button:hover {
			background-color:#06930B; 
			font-family: Helvetica;

		}
		label{
			font-size: 15px;
			font-family: Helvetica;
		}

		
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		
		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		
		.container {
			padding: 16px;
		}

		
		span.psw {
			float: right;
			padding-top: 16px;
		}

		
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			.cancelbtn {
				width: 100%;
			}
		}
	
	</style>

</head>
<body>
	
	<form method="post">
	  <div class="imgcontainer">
		<img src="img/signin_image.png" alt="Avatar" class="avatar">
	  </div>
<?php
// Note triple not equals and think how badly double
// not equals would work here...
if (isset($_SESSION['signuperror'])) {
    // Look closely at the use of single and double quotes
    echo('<p style="color: red;">'.htmlentities($_SESSION['signuperror'])."</p>\n");
    unset($_SESSION['signuperror']);
}
    if(isset($_SESSION['signupsuccess']))
    {
        
    unset($_SESSION['signupsuccess']);
    }

?>
        <label for="fname">First Name</label>
		<input type="text"  name="fname">

		<label for="lname">Last Name</label>
		<input type="text"  name="lname">
	  
		<label for="uname">Email</label>
		<input type="text"  name="email">

		<label for="psw">Password</label>
		<input type="password"  name="pass">
        
        <label for="phone">Phone</label>
		<input type="text"  name="phone">

		<button type="submit">SIGNUP</button>
		
	 

	  <div style="background-color:#f1f1f1">
		<input type="submit" name="cancel" value="Cancel" class="btn btn-lg" style="background-color:red;color:white;">
		
	  </div>
	</form>
	
</body>
</html>