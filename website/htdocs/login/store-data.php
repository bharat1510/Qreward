<?php
	include('dbconnect.php');
	if (isset($_POST['upload'])) {
		$activity_num = $_POST['num'];
		$usr = $_POST['usr'];
		$error = "";
		$fileName=$_FILES["file"]["name"];
		$fileSize=$_FILES["file"]["size"]/1024;
		$fileType=$_FILES["file"]["type"];
		$fileTmpName=$_FILES["file"]["tmp_name"];  

		#echo "Initialized<br>";
		#echo $fileType."  ".$fileName."  ".$fileSize;
		#echo "<br>1st - ".$error;		
		
		if (isset($_FILES["file"])){
			$allowedExts = array("mp4", "avi");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			#echo "<br>extension - ".$extension;
		 
			if ($_FILES["file"]["error"] > 0) {
				$error .= "Error opening the file<br />";
			}
			#echo "<br>Now cheking for type";
			#echo "<br>".$error;
			if ( $_FILES["file"]["type"] != "video/mp4" &&
					$_FILES["file"]["type"] != "video/avi" ) {	
				$error .= "File type not allowed<br />";
			}
			if (!in_array($extension, $allowedExts)) {
				$error .= "Extension not allowed<br />";
			}
			#echo "<br>not all - ".$error;
			if ($_FILES["file"]["size"] > 25242880) {
				$error .= "File size shoud be less than 10 MB<br />";
			}
			#echo "<br>".$_FILES['file']['size'];
			#echo "<br>".$_FILES['file']['type'];
			#echo "<br>".$_FILES['file']['error'];
			#echo "<br>".$error;
		 
			if ($error == "") {
				#echo "Without error";
				$random=rand(101,999);
				$newFileName=$random.$fileName;
				$uploadPath="../upload/".$newFileName;
				if(move_uploaded_file($fileTmpName,$uploadPath)){
					echo "<br>Successful<br>"; 
					echo "File Name :".$newFileName;
					echo "<br>";
					echo "File Size :".$fileSize." kb <br>"; 
					$s = ($fileSize/1024);
					echo "File Size :".$s." mb <br>"; 
					echo "File Type :".$fileType;
					echo "<br>";
					
					
					echo $usr."__".$activity_num;
					$query="INSERT INTO upload (Username,Filename,Activity) VALUES('$usr','$newFileName','$activity_num')";
					mysqli_query($conn,$query);
					$true = "true";
					header("location:../activity.php?username=$usr&sent=$true");
					#echo "Stored";
			}
			else {
					echo $error;
				}
				}
			}
			
			}
?>