<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CHINMAYA VIDYALAYA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h2 class="text">Welcome</h2><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/home.png" class="imgs">
					<p class="para">
					Chinmaya Vidyalaya, Bokaro Steel City (Chinmaya Bokaro) is an English medium co-educational public school affiliated with the Central Board of Secondary Education, located in the Indian state of Jharkhand. The school is run by the Chinmaya Mission, a non-profit Hindu spiritual organization. The school motto is "Keep Smiling".
					</p>
					
					<p class="para">The school was established in 1977, with TR Krishnaswamy as the Director, and Hemlatha Biswas as the Principal.

Chinmaya was recognized by the British Council for its performance from 2014 to 2017, and was twice visited by former President of India, Dr. A. P. J. Abdul Kalam.

As of 2018 Ashok Singh served as the Principal.
</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>