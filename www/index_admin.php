<?php
session_start();
// Demand a GET parameter
require_once "pdo.php";

?>






    
        




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!--build:css css/main.css-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  
    <!--endbuild-->
    <title>FIND MY TYPE</title>
</head>
    <style>
        .navbar-dark{
        
        background-color:cadetblue;
    
        }
    body{
            padding:50px 0px 0px 0px;
            z-index=0;
                
        }
        .nav-item{
            font-size:17px;
        }
        .navbar-brand{
            font-size:25px;
        }
        .bgimg
        {
	background-image: url('img/blood3.jpg');
	background-size: 100% 100%;
	background-attachment: fixed;
	width:auto;
	height:750px;
        }
        .text-center{
            text-align: center;
        }
        .headerset
{
	padding-top:250px;
	box-sizing: border-box; 
}
        .image{
            width:94%;
            height:90%;
            padding-left: 35px;
        }
        .headerset h1{
            color:lightgoldenrodyellow;
        }
        #DonorButton{
    position:absolute;
    left:auto;
    top:100px;
    right:0px;
    margin: 5px;
}
        .carousel{
            background: antiquewhite;
            
        }
        .carousel-caption{
            background-color: antiquewhite;
            display: inline;
            padding:0.5rem;
            -webkit-box-decoration-break:clone;
            box-decoration-break: clone;
            left:auto;
            right:auto;
            position:absolute;
            bottom:0;
            right:0;
            width:50%;
            height:100%;
        }
        
        .carousel-item{
            height:300px;
            width:auto;
            color: crimson;
        }
        .carousel-item img{
            position:absolute;
            top:0;
            left:0;
            min-height:300px;
            width:450px;
        }
        .jumbotron{
            padding: 70px 30px 70px 30px;
            margin:0px auto;
        }
        .row-content {
    @include zero-margin(50px,0px);
    border-bottom: 1px ridge;
    min-height:250px;
           
}
        .media{
            @include zero-margin(50px,0px);
    border-bottom: 1px ridge;
    min-height:200px;
            width:900px;
            background-color:azure;
            padding: 50px 30px 50px 30px;
             
            
        }
        
        .footer{
            background-color:darkseagreen;
            margin:0px auto;
            padding:20px 0px 20px 0px;
        }
        .flip-card {
  
  width: 300px;
  height: 350px;
  border: 1px solid #f1f1f1;
  /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
 
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: white;
  color:black;
  transform: rotateY(180deg);
    
}
        .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
     
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}

.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
        .search1{
            background-color:papayawhip;
        }
 
    </style>
    
<body>
    
    
       <nav class="navbar navbar-dark navbar-expand-md fixed-top">
        <button class='navbar-toggler' type="button" data-toggle="collapse" data-target='#Navbar'>
        <span class="navbar-toggler-icon"> </span></button>
        <a class="navbar-brand mr-auto font-weight-bold" href="#" style="color:white;"><img src="img/smallheart2.webp" height="30" width="35">&nbsp;FIND MY TYPE</a>
           
        <div class="container">
            <div class="collapse navbar-collapse" id="Navbar">
           <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="#home"><span class="fa fa-home fa-lg"> </span>Home</a></li>
               
            <li class="nav-item"><a class="nav-link" href="#aim"><span class="fa fa-child fa-lg"> </span> Aim</a></li>
            <li class="nav-item"><a class="nav-link" href="#gallery"><span class="fa fa-image fa-lg"> </span> Portfolis</a></li>
               <li class="nav-item"><a class="nav-link" href="#team"><span class="fa fa-info fa-lg"> </span> About us</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><span class="fa fa-address-card fa-lg"> </span> Contact us</a></li>
               </ul>
            </div>
           </div>
        </nav>
    
    
    
    <header>
    <div class="bgimg">
       
       
        <section id="home">
            	 <a id="DonorButton" href='register.php'><button class="btn text-white btn-lg " style="background-color:#b0e0e6"><span class="fa fa-sign-in"></span>DONATE</button></a>
                        
  <?php
    if(isset($_SESSION['success']))
        
    {
       /* echo('<div class="alert" id="alertdiv" style="background-color:green;">');
 echo('<span class="closebtn" id="close">&times;</span>');
  echo('Registration Successful.');
echo('</div>');
      */
        echo('<script>alert("Registration successionful");</script>');
        unset($_SESSION['success']);
    }
            if(isset($_SESSION['feedsuccess'])
               {
                   echo('<script>alert("Feedback Received");</script>');
                unset($_SESSION['feedsuccess']);
               }
    ?>
            
    <?php
            if(isset($_POST['city']) && isset($_POST['bloodgrp'])) 
{
    if(strlen($_POST['city'])<1 || strlen($_POST['bloodgrp'])<1)
    {
        $_SESSION['err']="All fields are required";
        header('Location:index.php');
        return;
        
    }
    else{
    $_SESSION['suc']="search";
    }
}
    
    if(isset($_SESSION['err']))
    {
        echo('<script>alert("All fields are required");</script>');
        unset($_SESSION['err']);
    }
    
    
    

     

    ?>
                  
                   

    
            
					<div class="text-center text-white headerset">
						
							<h1 style="color:black;">DONATE BLOOD,SAVE LIFE</h1>
                        <br><br><br><br><br><br>
                        <br><center><a href="#search"><button class="btn text-white btn-lg" style="background-color:firebrick;">GET STARTED</button></a></center>
							
</div>
            </section>
   
        </div>

    </header><br><br><br><br>
    <div id="search"><br><br><br>
        <div class="container search1"><br><br><br>
            <h1 style="color:#960018;">FIND DONORS</h1><br><br>
            <form method="post">
            <div class="form-group row">
                <div class="col-md-5 offset-1 ">
                <input type="text" class="form-control" name="city" placeholder="Enter Location" style="width:350px;border:2px solid black;">
                </div>
               
            
                
                <div class="col-md-3 offset-1">
                <select class="form-control" name="bloodgrp" style="width:300px;border:2px solid black;">
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    </select>
                    <br><br><br>
                </div>
                
                </div>
                
                <center><button type="submit" class="btn btn-success btn-lg btn-rounded" style="width:200px;background-color:crimson;">SEARCH</button></center>
                    </form>
            <br><br><br><br>
            </div>
        </div>
            
        
        
        
        
    <br><br><br><br><br><br>
    
    <section id="donorinfo">
        <?php
        if(isset($_SESSION['suc']))
        {
            unset($_SESSION['suc']);
    $r=$pdo->query('SELECT COUNT(*) FROM donor where location='.'"'.$_POST['city'].'"'.'AND bloodgrp='.'"'.$_POST['bloodgrp'].'"')->fetchColumn();
        if($r!=0)
        {
            
            echo('<div class="container">');
            echo('<h1 style="color:#960018;">MATCHES</h1>');
            echo("\n");
            echo("\n");
            echo('<br><br>');
            echo('<div class="row">');
            
            $stmt=$pdo->query('SELECT * FROM donor,user where location='.'"'.$_POST['city'].'"'.'AND bloodgrp='.'"'.$_POST['bloodgrp'].'"'.'AND donor.email=user.email');
             while($row=$stmt->fetch(PDO::FETCH_ASSOC))
             {
            echo('<div class="col-md-4">');
                    
                                echo('<img src="img/smallblood1.jpg"'.'height=250px width=250px');
                                echo('alt="Avatar">');
               
                            
                            
                            echo('<h3 style="color:darkgreen">Donor Info:</h3>'); 
                 echo('<br>');
                
                            echo('<table><tr><td><b>Name:</b></td><td>'.$row['fname'].' '.$row['lname'].'</td></tr>'."\n");
                 echo('<tr><td><b>Email:</b></td><td>'.$row['email'].'</td></tr>');
                 echo('<tr><td><b>Phone:</b></td><td>'.$row['phone'].'</td></tr>');
                 
                 echo('<tr><td><b>Age:</b></td><td>'.$row['age'].'</td></tr>');
                 
                 echo('<tr><td><b>Gender:</b></td><td>'.$row['gender'].'</td></tr>');
               
                 echo('<tr><td><b>Blood group:</b></td><td>'.$row['bloodgrp'].'</td></tr>');
                 
                 echo('</table>');
                 
                            echo('</div>');
                       
                 
                 
                                
             }
            echo("</div>"."\n");
                                echo("</div>"."\n");
            
            
    }
            else
    {
        echo("<center><h2>Sorry!!!No matches found...</h2></center>");
    }
        }
    
    ?>
    </section>
    <div id="services">
        
    <br><br><br><br><br>
    <div class="container" >
        <h1 style="text-align:left; color:#960018;">WHY SHOULD I DONATE BLOOD?</h1><br><br>
        <div class="row row-content">
        <div class="col">
            <div id="mycarousel" class="carousel" data-ride="carouselslide">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="img-fluid d-none d-md-block" src="img/avengers.jpg" alt="avengers">
                    <div class="carousel-caption col-lg-8   mb-md-0 mb-5">
                    <h1 class="mt-0" style="color:firebrick">Avengers Assemble</h1><br>
                       <h5 style="color:black">It's in your blood to help save a life!!</h5>
                        
                    <h5 style="color:black">All heroes don't wear capes.Your droplets of blood can create an ocean of happiness.Donate blood and be a part of our avenger team who've helped save million of lives.The world needs you!!</h5></div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="img/health2.png" alt="heart">
                    <div class="carousel-caption">
                    <h1 class="mt-0" style="color:firebrick">A Free Health Screening</h1><br>
                    <h5 style="color:black">By going to donate blood you are getting a mini-physical checkup</h5>
                    <h5 style="color:black">Before you are allowed to donate,your vital signs will be checked to make sure you are fit enough for the procedure,You'll be screened for infectious diseases you may be unaware of.</h5></div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="img/heart8.jpg" alt="heart">
                    <div class="carousel-caption">
                    <h1 class="mt-0" style="color:firebrick">Be Heart Healthy</h1><br>
                    <h5 style="color:black">Reduced cardiovascular risk factors</h5>
                    <h5 style="color:black">Regular blood donation is linked to lower blood pressure and a lower risk for heart attacks.Blood donation helps you to lower the viscosity of the blood thus you can keep your heart healthy.</h5></div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="img/happy.jpg" alt="happy">
                    <div class="carousel-caption">
                    <h1 class="mt-0" style="color:firebrick">A Happier,Longer Life</h1><br>
                        <h5 style="color:black">The sense of happiness you experience after saving a life is indescribable</h5>
                    <h5 style="color:black">Altruism and volunteering have been linked to positive health outcomes,including lower risk of depression and greater longevity.</h5></div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-none d-md-block" src="img/wink.jpg" alt="wink">
                    <div class="carousel-caption">
                    <h1 class="mt-0" style="color:firebrick">No Loss just Gain!</h1><br>
                        <h5 style="color:black">Added bonus:A Calorie-free snack</h5>
                    <h5 style="color:black">Within 24 hours of blood donation,your body replaces lost fluids and after several weeks,your body replaces lost blood cells.Walk out of the camp with pride and an added benefit of cookies and juice which is a "zero-calorie snack.</h5></div>
                </div>
                
            </div>
                <ol class="carousel-indicators">
                <li data-target='#mycarousel' data-slide-to="0" class="active"></li>
                <li data-target='#mycarousel' data-slide-to="1" ></li>
                <li data-target='#mycarousel' data-slide-to="2" ></li>
                <li data-target='#mycarousel' data-slide-to="3" ></li>
                </ol>
                <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"><span class='carousel-control-prev-icon'></span></a>
                <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"><span class='carousel-control-next-icon'></span></a>
            </div>
        </div>
        </div></div>
    <br><br></div><br><br><br>
    
    <section id="slogan2">
    
    <div class="col-12">
        <div class="card card-body" style="background-color:lightblue">
        <blockquote class="blockquote">
            <center><p class="mb-0"><span class="fa fa-comment fa-lg"> </span>     "Donation of Blood means few minutes to you but a lifetime for somebody else."</p></center></blockquote></div>
        
        </div>
    </section>
    
    
    <section id="tips">
    <div class="container"><br><br><br><br><br>
        <div class="col-12">
        <h1 style="color:#960018;">BLOOD DONATION TIPS</h1><br>
        <div id="accordian">
            <div class="card">
            <div class="card-header" role="tab" id="waterhead">
                <h3 class="mb=0" style="color:#003152;"><a data-toggle="collapse" data-target="#water">Drink plenty of water</a></h3>
                </div>
            <div class="collapse show" id="water" data-parent="#accordian">
                <div class="card-body">
                <p class="d-none d-sm-block" style="font-size:18px;" >Staying hydrated makes it easier to find your veins and prevents you from becoming light-headed after donating.</p></div></div></div>
        
            <div class="card">
            <div class="card-header" role="tab" id="eathead">
                <h3 class="mb=0" style="color:#003152;"><a data-toggle="collapse" data-target="#eat">Eat well beforehand</a></h3>
                </div>
            <div class="collapse" id="eat" data-parent="#accordian">
                <div class="card-body">
                    <p class="d-none d-sm-block" style="font-size:18px;">Don't skip breakfast,and be sure to eat snacks offered to you.These things will help you tolerate the donation well and feel like yourself the rest of the day.</p></div></div></div>
            
            
            <div class="card">
            <div class="card-header" role="tab" id="exercisehead">
                <h3 class="mb=0" style="color:#003152;"><a data-toggle="collapse" data-target="#exercise">Exercise before donating,not afterward</a></h3>
                </div>
            <div class="collapse" id="exercise" data-parent="#accordian">
                <div class="card-body">
                    <p class="d-none d-sm-block" style="font-size:18px;">It's okay to go to the gym before you donate blood but not exercise afterwards.You've basically done your workout for the day once you've donated blood.</p></div></div></div>
            
            
            <div class="card">
            <div class="card-header" role="tab" id="ironhead">
                <h3 class="mb=0" style="color:#003152;"><a data-toggle="collapse" data-target="#iron">Take iron tablets</a></h3>
                </div>
            <div class="collapse" id="iron" data-parent="#accordian">
                <div class="card-body">
                    <p class="d-none d-sm-block" style="font-size:18px;">We recommend that individuals who donate blood frequently take iron supplement or a multivitamin with iron.More and more we recommend that tenage donors in particular take iron,cause it's been shown that tenage donors may become iron deficient after blood donation</p></div></div></div>
            
            
            
            </div></div></div>
    
    </section>
    
    
    <section id="aim"><br><br><br><br>
    <div class="container">
        <div class="row row-content">
        <div class="col-12 col-sm-6 col-md-5">
            <h1 style="color:#960018;">AIM</h1><br>
            <p style="font-size:18px;">Started in 2018,Find my type is a active blood donation intiative devoted to help people who are in urgent need for blood,and also for patients suffering from Luekemia,Aplastic anemia,Hypersplenism,patients undergoing chemotherapy who are in urgent need of white blood cells.Since the white blood cells cannnot be stored for more than 3 days,we ensure to provide help to patients who are in need from our large donor group.People can register themselves as donors and will be contacted incase there's an emergency.</p>
            <p style="font-size:18px;">The blood donation camps conducted under our intiative supply blood to the nearest blood camps where they can be stored and used when needed.We intent to create a difference in the lives of the people through our initiative.</p></div>
        
        <div class="col-12 col-sm-6 col-md-7">
            <h2>Facts &amp; Figures</h2>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>&nbsp;</th>
                    <th>2018</th>
                    <th>2019</th>
                    <th>2020</th>
                    </tr></thead>
                <tbody>
                <tr><th>Donors</th>
                    <th>1000</th>
                    <th>1300</th>
                    <th>1800</th>
                    
                    </tr>
                <tr><th>Camps Conducted</th>
                    <th>5</th>
                    <th>12</th>
                    <th>15</th>
                    
                    </tr>
                    
                    <tr><th>Lives saved</th>
                    <th>120</th>
                    <th>450</th>
                    <th>578</th>
                    
                    </tr>
                </tbody>
                </table></div></div></div></div>
    
    <br><br><br>
    
    </section>
    
    
    <section id="slogans">
    <div class="col-12">
        <div class="card card-body" style="background-color:lightblue">
        <blockquote class="blockquote">
            <center><p class="mb-0"><span class="fa fa-comment fa-lg"> </span>   "If you are a blood donor,you're a hero to someone,somewhere,who received your gracious gift of life."</p></center></blockquote></div>
        
        </div>
    
    
    </section>
    <section id="gallery"><br><br><br><br><br>
        
    <?php
        $r=$pdo->query('SELECT COUNT(*) FROM camp_info')->fetchColumn();
        if($r!=0)
        {
            
            echo('<div class="container">');
            echo('<h1 style="color:#960018;">GALLERY</h1>');
            echo("\n");
            echo("\n");
            echo('<br><br>');
            echo('<div class="row">');
            
            $stmt=$pdo->query("SELECT * FROM camp_info");
             while($row=$stmt->fetch(PDO::FETCH_ASSOC))
             {
            echo('<div class="col-md-4">');
                    echo('<div class="flip-card">');
                        echo('<div class="flip-card-inner">');
                            echo('<div class="flip-card-front">');
                                echo('<img src="'.$row['camp_image'].'"'.'height=300 width=300');
                                echo('alt="Avatar">');
               
                            echo('</div>');
                            echo('<div class="flip-card-back">');
                            echo('<h3 style="color:darkgreen">Camp Info:</h3>'); 
                 echo('<br>');echo('<br>');
                            echo('<table><tr><td><b>Camp Date:</b></td><td>'.$row['camp_date'].'</td></tr>'."\n");
                 
                 echo('<tr><td><b>Camp Location:</b></td><td>'.$row['camp_loc'].'</td></tr>');
                 
                 echo('<tr><td><b>No.of Donors:</b></td><td>'.$row['camp_donor'].'</td></tr>');
               
                 echo('<tr><td><b>Blood bank:</b></td><td>'.$row['camp_hosp'].'</td></tr>');
                 
                 echo('</table>');
                 
                            echo('</div>');
                       echo('</div>');
                    echo('</div>');
                echo('</div>'); 
                 
                 
                                
             }
            echo("</div>"."\n");
                                echo("</div>"."\n");
            
            
    }
        
        ?>
    
    
    <br><br><br>
    </section>
    
    
    
    <section id="slogan2">
    <div class="col-12">
        <div class="card card-body" style="background-color:lightblue">
        <blockquote class="blockquote">
            <center><p class="mb-0"><span class="fa fa-comment fa-lg">   </span>     "Starve a Vampire DONATE BLOOD."</p></center></blockquote></div>
        
        </div>
    
    </section>
    
    <br>
    <?php
    if(isset($_SESSION['success']))
    {
        $r=$pdo->query('SELECT COUNT(*) FROM description')->fetchColumn();
        if($r!=0)
        {
            echo('<div class="row row-content media-row align-items-center" id="reviews">'."\n");
            echo('<div class="col-12 col-sm-4 col-md-3">'."\n");
            echo('<h2>Customer Reviews</h2>'."\n");
            echo("</div>"."\n");
            
        
        
            $stmt=$pdo->query("SELECT desc_name,desc_paragraph FROM description");
             while($row=$stmt->fetch(PDO::FETCH_ASSOC))
             {
                 
             
            
            echo('<div class="col-12 col-sm col-md ">'."\n");
            echo('<div class="media" style="right:-20px;">'."\n");
            echo('<div class="media-body">'."\n");
             
        
                 
            echo('<h2 class="mt-0">'.htmlentities($row['desc_name']). '    wrote:</h2>'."\n");
                 echo('<h5 class="d-none d-sm-block" style="color:crimson;">');
                  echo(htmlentities($row['desc_paragraph']));
                 echo('</h5>');
            
            
            echo('</div>');
            echo('</div>');
                 echo('</div>');
            echo('</div>');
                 echo("<br>");
            echo("\n");
            echo("<br>");
             }
            
        }
    }
    ?>
    
        <br><br>          
                
                
    
        
        <center><a id="reviewButton" href="http://localhost/Blood_Donation_Project/www/addcamp.php"><button class="btn text-white " style="background-color:lightcoral"><span class="fa fa-plus"></span>ADD CAMP</button></a></center>
        
    
    
     <!----OUR TEAM---->     
<!-- Section: Team v.1 -->
<section class="team-section text-center my-5" id="team">
<br>
  <!-- Section heading -->
  <h1 class="h1-responsive font-weight-bold my-5">Our amazing team</h1>
  <!-- Section description -->
  <h5 class="grey-text w-responsive mx-auto mb-5">At Find My Type, our team of experienced professionals try their level best to
      help you find the right blood group in case of emergency and also conduct blood camps that follow all the safety precaution and make sure that the blood reaches to those who really need it.</h5><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-1">
            <div class="card">
  <center><img src="img/akshatha_shetty.jpg" alt="Avatar" style="width:80%;height:300px;"></center>
  <div class="card-content">
    <h4><b>Akshatha Shetty</b></h4>
    <p>Founder</p>
      <p>Being a Computer Science student at NMAM Institute of technology,Akshatha developed this initiative as to help people who are in need.She believes that it is in our hands to make a difference and transform this world into a better place to live in.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <a href="https://www.facebook.com/"><i class="fa fa-facebook-f blue-text" style="font-size:24px"> </i></a>
        </a>
        <!-- Twitter -->
        <a class="p-2 fa-lg tw-ic">
          <a href="https://twitter.com/login"><i class="fa fa-twitter blue-text" style="font-size:24px"> </i></a>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram blue-text" style="font-size:24px"> </i></a>
        </a>
      </ul>
  </div>
</div></div>
         <div class="col-md-4 offset-2">
            <div class="card">
  <center><img src="img/akshatha_shetty.jpg" alt="Avatar" style="width:80%;height:300px;"></center>
  <div class="card-content">
    <h4><b>Aanchal Jain</b></h4>
    <p>Founder</p>
      <p>Aanchal is also a Computer Science student at NMAM Institute of technology.She is a self-determined,self-motivated person whose ultimate goal in life is to transform this world into a better place and works very hard to make a difference.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <a href="https://www.facebook.com/"><i class="fa fa-facebook-f blue-text" style="font-size:24px"> </i></a>
        </a>
        <!-- Twitter -->
        <a class="p-2 fa-lg tw-ic">
          <a href="https://twitter.com/login"><i class="fa fa-twitter blue-text" style="font-size:24px"> </i></a>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram blue-text" style="font-size:24px"> </i></a>
        </a>
      </ul>
  </div>
</div></div>
    </div></div></section>
  
<br>
<br>
<br>

    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">             
                <div class="col-4  offset-1 col-sm-2">
                    <br>
                    <br>
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolis</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <br><br>
                    <h5>Our Address</h5>
                    <address>
		              NMAM Institute of Technology<br>
		              Karakala<br>
                    Karnataka<br>
		              <i class="fa fa-phone fa-lg"></i>: +91 6362504858<br>
		              <i class="fa fa-fax fa-lg"></i>: +91 9591893938<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">findmytype@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                       <a class="btn btn-social-icon btn-social-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-social-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-social-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-social-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-social-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
            <div class="row justify-content-center"> 
                <div class="col-auto">
                    <p>© Copyright 2018 Find My Type</p>
                </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3884.6729798631595!2d74.93174401413728!3d13.183007213772633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbb56415ad85e5b%3A0x10b77ac6f6afc7fa!2sN.M.A.M.%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1603875655710!5m2!1sen!2sin" width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"  ></iframe>
                       
                
           </div>
        </div>
    </footer>

    <script src="index.js" type="text/javascript"></script>
    <!--build:js js/main.js-->
    <script src="node_modules1/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <!--endbuild-->

</body>

</html>