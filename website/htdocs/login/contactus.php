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