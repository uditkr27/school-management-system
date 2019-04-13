<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CHINMAYA VIDYALAYA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/b1.png" width="800">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					PRINCIPAL<BR>
					CHINMAYA VIDYALAYA, BOKARO STEEL CITY<BR>
					SECTOR 5, BOKARO STEEL CITY,<BR>
					JHARKHAND, 829122<BR>
					Mail - chinamya@gmail.com<br>Phone - 02213-32432
				</form>
			</div>
		</div>
		<br><br>
		<br><br>
		<div class="footer">
			<footer><p>Copyright &copy; CHINMAYA VIDYALAYA, BOKARO STEEL CITY </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>