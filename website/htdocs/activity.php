<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>Activities</title>
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
		
		<!--Custom JavaScript Alert Box-->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body id="top">
	<?php $usr = $_GET['username']; 
			if(isset($_GET['sent'])) {
				if(($_GET['sent']) == "true")
					echo '<script> swal({
					title: "Video Upload Successfully.",
					text: "Your reward will update soon.",
					icon: "success",
					button: "Okay",
				}); </script>'; 
			}
	?>
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
					<a href="index.php" class="navbar-brand">Q-REWARD</a>
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
				?>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<a href="./index.php"><button type="button" style="margin-top:20px; margin-left:280px;" class="btn btn-success">HOME</button></a>
			
		<div class="col-md-12">
    		<h2 style="margin-top:30px;" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">UPLOAD<span>ACTIVITY</span></h2>
    	</div>
		
		<div class="container">
			<div class="jumbotron">
				<style type="text/css">
				.jumbotron {	
					background-color:#c6ef64;
				}
				</style>
			<form action="./login/store-data.php" method="post" enctype="multipart/form-data">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-md-4 control-lebal">Activity Number : </label>
					<div class="col-xs-5">
					<div class="radio_space">
						<input type="radio" name="num" value="1"> 1&ensp;
						<input type="radio" name="num" value="2"> 2&ensp;
						<input type="radio" name="num" value="3"> 3&ensp;
						<input type="radio" name="num" value="4"> 4&ensp;
						<input type="radio" name="num" value="5"> 5&ensp;
						<input type="radio" name="num" value="6"> 6&ensp;
						<input type="radio" name="num" value="7"> 7&ensp;
						<input type="radio" name="num" value="8"> 8&ensp;
					</div>
					</div>
				</div>
				<input type="hidden" name="usr" value="<?php echo $usr;?>">
				<div class="form-group">
					<label for="amt" class="col-md-4 control-lebal">Upload Video : </label>
					<div class="col-xs-5">
						<input name="file" class="form-control" id="amt" type="file" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-1 col-xs-push-4">
						<input type="submit" onclick="myFunction()" id="submit" class="btn btn-danger" name="upload" value="UPLOAD"/>					
					</div>
				</div>			
			</div>
			</form>
			</div>
		</div>
			
    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">COMPATE <span>TASK & EARN</span> COINS</h2>
    				</div>
    				<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					 <div class="team-wrapper">
    						<img src="images/1.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 1</span>
    							</div>
    					</div>
						
    				</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.0s">
    					 <div class="team-wrapper">
    						<img src="images/2.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 2</span>
    							</div>
    					</div>
						
    				</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.0s">
    					 <div class="team-wrapper">
    						<img src="images/3.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 3</span>
    							</div>
    					</div>
						
    				</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.0s">
    					 <div class="team-wrapper">
    						<img src="images/4.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 4</span>
    							</div>
    					</div>
						
    				</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.0s">
    					 <div class="team-wrapper">
    						<img src="images/5.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 5</span>
    							</div>
    					</div>
						
    				</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.0s">
    					 <div class="team-wrapper">
    						<img src="images/6.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 6</span>
    							</div>
    					</div>
						
    				</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.0s">
    					 <div class="team-wrapper">
    						<img src="images/7.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 7</span>
    							</div>
    					</div>
						
    				</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.0s">
    					 <div class="team-wrapper">
    						<img src="images/8.png" class="img-responsive" alt="Bharat Vora">
    							<div class="team-des">
    								<span>Activity - 8</span>
    							</div>
    					</div>
						
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end team -->

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