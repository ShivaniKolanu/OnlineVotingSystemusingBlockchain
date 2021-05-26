<?php




?>



<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Yodha</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">  
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
							<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> youremail@gmail.com</a>
						</div>
						<div class="phone-box">
							<a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 890</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="right-top">
						<div class="social-box">
							<ul>
								<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
							<ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="services.html">Our Services</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                       
						<li><a class="active" href="contact.html">Vote Now</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   	

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Start Voting Process</h3>
                <p class="lead">Please Enter Your Voter Id to Start the Process. <br>YOUR VOTE IS YOUR SECRET</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form action="" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="id" class="form-control" placeholder="Enter Your Voter ID">
                                </div>
                                
                               
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="SEND" name="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

<?php



$connection = mysqli_connect("localhost","root","","election");


if(isset($_POST['submit'])){
$id = $_POST['id'];
$query="SELECT * FROM vote WHERE id ='$id'";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
		<div class="row">

				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							
						</div>
						<h3>VOTER ID</h3>
						<?php 
					echo "<h2>";	
					echo $row['id']; echo "<br>";
					echo "</h2>";	 ?>
					
							
						
						<h3>Name</h3>
						
						<?php   
					echo "<h2>";
						 echo $row['name']; echo "<br>";
						echo "</h2>"; ?>
					
						<h3>Picture</h3>
						<?php
echo "<h2>";echo'<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"width="200" height="200">';
echo "</h2>";
?>

</div>
					<div class="address-item">
						<div class="address-icon">
							
						</div>
						<h3>ASSEMBLY CONSTITUENCY NUMBER</h3>
						<?php 
					echo "<h2>";	
					echo $row['con_no']; echo "<br>";
					echo "</h2>";	 ?>
					
							
						
						<h3>PARLIAMENTARY CONSTITUENCY</h3>
						
						<?php   
					echo "<h2>";
						 echo $row['con']; echo "<br>";
						echo "</h2>"; ?>
						</div>
						
						<div class="address-item">

<h3>GENDER</h3>
						
						<?php   
					echo "<h2>";
						 echo $row['gender']; echo "<br>";
						echo "</h2>"; ?>
<h3>FATHER/HUSBAND'S NAME</h3>
						
						<?php   
					echo "<h2>";
						 echo $row['forhname']; echo "<br>";
						echo "</h2>"; ?>
<h3>PART NUMBER</h3>
						
						<?php   
					echo "<h2>";
						 echo $row['partno']; echo "<br>";
						echo "</h2>"; ?>
					<h3>SERIAL NUMBER</h3>
						
						<?php   
					echo "<h2>";
						 echo $row['serialno']; echo "<br>";
						echo "</h2>"; ?>
						</div>
						</div>
						<center>
						<form action="otp.php" >
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="Submit" name="next" id="next" class="btn btn-light btn-radius btn-brd grd1 btn-block">Accept</button>
                                </div></form></center>
						
						

<?php
}

}
?>
					
				
				</div>
	</center>





			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo.png" alt="" />
                        </div>
                        <p> Current voting system highly lacks in a technology though there is a lot of ways to make the process easier. Going digital is one of accountability. Citizens are losing their trust in the democratic. system increasingly. Elected candidates must explore the technology to make voting more transparent and easier. </p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Pricing <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">About <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Subscribe</h3>
							<p></p>
                        </div>
						
						<div class="footer-right">
							<form method="get" action="#">
								<input placeholder="Subscribe our newsletter.." name="search">
								<i class="fa fa-envelope-o"></i>
							</form>
						</div>                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Yodha</a> 
					</p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>