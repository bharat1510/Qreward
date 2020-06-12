<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>Result</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="./images/favicon.ico"/>
		
		<link rel="stylesheet" href="css/blank.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
		
	</head>
	<body>
		<div class="pyro">
			<div class="before"></div>
			<div class="after"></div>
		</div>	
		<div class="container">
			<div class="row">
			<?php 
			include('./login/dbconnect.php');
			if(isset($_GET['usr'])) {
				if(($_GET['sent']) == 'true') {
					$username=$_GET['usr'];
					echo '<div class="congo">
						<h2> Congratulations, '.$username.' </h2>
						<h4>Your task is approved.</h4>
						<h4>You earn 50 Coins, which is credited in your account.</h4>
						<br/>
						<a href="index.php?username='.$username.'"><button>HOME</button></a>
					</div>';
					
					$query="SELECT * FROM users WHERE Username='$username'";
					$result=mysqli_query($conn,$query);
					$data=mysqli_fetch_assoc($result);
					$coins = $data['Coins'];
					$uid = $data['Uid'];
					$coins = $coins + 50;
					echo $coins." ".$uid;
					
					$store_query = "UPDATE users SET Coins='$coins' WHERE Username='$username'";
					$re = mysqli_query($conn,$store_query);
					if($re) {
						echo "Yes";
					}
					else {
						echo "No";
					}
				}
				else {
					echo '<div class="congo">
						<h2> Sorry, '.$_GET['usr'].' </h2>
						<h4>We cannot recognized your task. Your task is disapproved.</h4>
						<h4>So be sad, try again and earn.<h4>
						<br/>
						<a href="index.php?username='.$_GET['usr'].'"><button>HOME</button></a>
					</div>';
				}
			}
			?>
			</div>
		</div>
	</body>
</html>