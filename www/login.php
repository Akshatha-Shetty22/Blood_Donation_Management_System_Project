<?php 
session_start();
require_once "pdo.php";
if( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: startpage.html");
    return;
}
if ( isset($_POST['email']) && isset($_POST['pass']) ) {
    unset($_SESSION['who']);
    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1 ) {
        $_SESSION['loginerror']= "Email and password are required";
        header('Location:login.php');
        return;
    }
     else if(strpos($_POST['email'],'@')==false)
    {
        $_SESSION['loginerror']="Email must have at sign (@)";
        header('Location:login.php');
        return;
    }
    else
    {
        
            
            $stmt=$pdo->query("SELECT email,password FROM user");
             while($row=$stmt->fetch(PDO::FETCH_ASSOC))
             {
                 echo("<script>alert('Hello');<script>");
            if ( ($row['email']==$_POST['email'])&&($row['password']==$_POST['pass']) ) {
            // Redirect the browser to game.php
            $_SESSION['email']=$_POST['email'];
            $_SESSION['loginSuccess']="Logged In.";
            header("Location: index.php?name=".urlencode($_POST['email']));
            error_log("Login success ".$_POST['email']);
            
            return;
        } 
             }
            $_SESSION['loginerror']="Incorrect password";
            error_log("Login fail ".$_POST['email']." $check");
            header('Location:login.php');
            
            return;
        
    
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
		<img src="images/admin.png" alt="Avatar" class="avatar">
	  </div>
<?php
// Note triple not equals and think how badly double
// not equals would work here...
if (isset($_SESSION['error'])) {
    // Look closely at the use of single and double quotes
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['loginerror']);
}
    if(isset($_SESSION['loginSuccess']))
    {
        
    unset($_SESSION['loginSuccess']);
    }

?>
	  
		<label for="uname">Enter your Username</label>
		<input type="text"  name="email">

		<label for="psw">Enter your Password</label>
		<input type="password"  name="pass">

		<button type="submit">Login</button>
		
	 

	  <div style="background-color:#f1f1f1">
		<input type="submit" name="cancel" value="Cancel" class="btn btn-lg" style="background-color:red;color:white;">
		
	  </div>
	</form>
	
</body>
</html>