<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>Home</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="./images/favicon.ico"/>
		
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/templatemo-style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

        <!-- start header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-phone"></i><span> Phone</span>875 869 7489</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-envelope-o"></i><span> Email</span><a href="#">bharatlvora8142@gmail.com</a></p>
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <ul class="social-icon">
                            <li><span>Join us on</span></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-apple"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Q-REWARD</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">EARN</a></li>
						<li><a href="#team">TEAM</a></li>
						<li><a href="#service">OUR APP</a></li>
						<li><a href="#portfolio">ARTICALS</a></li>
						<li><a href="#contact">CONTACT</a></li>
						
						<?php 
						if(isset($_GET['username'])) {
							echo '<li><a href="#about">LOGOUT</a></li>';
						}
						else {
							echo '<li><a href="#about">LOGIN/SIGNUP</a></li>';
						}
						?>
					</ul>
				</div>
				<div class="display">
				<?php
				if(isset($_GET['username'])) {
					include('./login/dbconnect.php');
					$username=$_GET['username'];
					$query="SELECT Coins FROM users WHERE Username='$username'";
					$result=mysqli_query($conn,$query);
					$data=mysqli_fetch_assoc($result);
					$coins = $data['Coins'];
					echo '<p>YOUR CURRENT REWARD '.$coins.' <img src="./images/coins.png" alt="coin image"></p>';
				}
				else {
					echo "<p>YOU'RE NOT LOGIN AT THIS MOMENT. LOGIN TO SEE YOUR REWARD :-)</p>";
				}
				?>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		
		
    	<!-- start home -->
    	<section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">We make your Quarantine <span>awesome</span></h1>
    					<div class="element">
                            <div class="sub-element">Hello, this is Q-REWARD,</div>
                            <div class="sub-element">We are providing you to awesome website that do not make you bored at this time.</div>
                            <div class="sub-element">Enjoy and earn with us.</div>
                        </div>
    					<a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">GET STARTED</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end home -->

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">JUST<span> 3 STEPS</span></h2>
    				</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-mobile"></i>
								</div>
								<h3 class="media-heading">Login</h3>
							</div>
							<div class="media-body">
								<p>Login to our website Q-REWARD by just clicking on the login button and make your time batter. Please tell your friends about it.</p>
								<?php 
									if(isset($_GET['username'])) {
										echo '<div class="dark"><a href="./login/logout.php">Logout</a></div>';
									}
									else {
										echo '<div class="dark"><a href="./login/login.php">Login</a></div>';
									}
								?>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">Upload Video</h3>
							</div>
							<div class="media-body">
								<p>Review all the task and select task whatever your want to do. Just upload the video of your task complation here.</p>
								<?php 
									if(isset($_GET['username'])) {
										echo '<div class="dark"><a href="https://qreward.herokuapp.com/?username='.$_GET['username'].'">Upload Video</a></div>';
									}
									else {
										echo '<div class="dark"><a href="./login/login.php">Upload</a></div>';
									}
								?>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-html5"></i>
								</div>
								<h3 class="media-heading">Earn money</h3>
							</div>
							<div class="media-body">
								<p>Relex for some time or do the other task. We'll shortly review your submission and update your reward coins.</p>
								<div class="dark"><a href="#">Your reward</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end about -->

    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AWESOME</span> TEAM</h2>
    				</div>
    				<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/member1.jpg" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<h4>Bharat Vora</h4>
    								<span>Developer</span>
    								<p>Deep Learning | IoT | Web Developer | Android Developer</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/member2.jpeg" class="img-responsive" alt="Akshit Desai">
    							<div class="team-des">
    								<h4>Akshit Desai</h4>
    								<span>Developer</span>
    								<p>Machine Learning | Data Structure | Android Developer | Algorithms</p>
    							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end team -->

    	<!-- start service -->
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">DOWNLOAD OUR<span> ANDROID APPLICATION</span></h2>
    				</div>
						<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-android"></i>
    					<h4>Android Application</h4>
    					<p>To make our user-experience batter we are also providing the android application for user to do things easy and efficient.</p>
						<a href="#"><h4>DOWNLOAD APP</h4></a>
    				</div>
    			<!--	<div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					<i class="fa fa-cloud"></i>
    					<h4>Cloud Computing</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-cog"></i>
    					<h4>UX Design</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div> -->
    			</div>
    		</div>
    	</section>
    	<!-- end servie -->
	
    	<!-- start portfolio -->
    	<section id="portfolio">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>COVID-19</span></h2>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
    					   <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <!--<h4>Project One</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p> -->
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img5.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img6.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img7.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img8.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
    			</div>
    		</div>
    	</section>
    	<!-- end portfolio -->

    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>US</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="" method="post">
    						<label>NAME</label>
    						<input name="name" type="text" class="form-control" id="fullname">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>
    						
                            <input type="submit" name="submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>Surat, Gujarat, India</span>
    						<p><i class="fa fa-phone"></i> 875 869 7489</p>
    						<p><i class="fa fa-envelope-o"></i> bharatlvora8142@gmail.com</p>
    						<p><i class="fa fa-map-marker"></i> Surat, Gujarat - 395017 </p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="#" class="fa fa-instagram"></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn">
                       	Copyright &copy; 2020 Q-REWARD</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

	</body>
</html>

<?php
	include('./login/dbconnect.php');
	if(isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mess=$_POST['message'];
		$query="INSERT INTO contactus(Name,Email,Message) VALUES('$name','$email','$mess')";
		
		mysqli_query($conn,$query);
	}

?>