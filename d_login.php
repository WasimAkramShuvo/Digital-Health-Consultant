<?php
/*include kora hbe config.php*/
include 'config.php';
?>
<!--Doc type - Tutorial work-->

<!DOCTYPE html>
<html>
<head>
	<title>Doctor Log-In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/web1.css">
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Digital Health Consultant</marquee> </h2>
    </div>
</head>
<body id="b">
	 <div id="d"> 
	 	<form action="d_login.php" method="POST" align="center"> 
	 		<center><img src="images/doctor.png" class="img" align="center"></center>
	 		<br>
			  <b>
			  <label>User-Name</label>
	 		  <input type="text" name="username" id="form" placeholder="Enter Username" required>
	 		  <br><br>
	 		  <b>
	 		  <label>User-Password</label>
	 		  <input type="password" name="password" id="form" placeholder="Enter your Password" required><br><br>

	 		  <input type="submit" name="d_login"class="btn btn-success" value="Log-In">
	 		  <a href="d_reg.php"><input type="button" name="d_reg" class="btn btn-primary" value="Registration"></a>
	 	</form>
	 	
	 	<?php
	 	/*log_in button a click holo kina!!!*/
	 	if(isset ($_POST ['d_login'])){
	 		/*user j email r pass dilo seta amr db tey ache kina!! tar check...*/
	 		$username = $_POST['username'];
	 		$password = $_POST ['password'];

	 			$query = "select * from d_reg where username = '$username' AND password = '$password' ";
	 			$check = mysqli_query($con, $query);

	 			if($check){

	 				if(mysqli_num_rows ($check) > 0){
	 					echo "
	 					<script>
	 					alert ('You are successfully Logged-In!');
	 					window.location.href = 'doctor.php';
	 					</script>
	 					";
	 				}
	 				else {
	 					echo "
	 					<script>
	 					alert ('Email or Password not Correct!');
	 					window.location.href = 'd_reg.php';
	 					</script>
	 					";
	 					/*email & pass check*/
	 				}

	 			}
	 			else {
	 				echo "
	 					<script>
	 					alert ('Database error!!');
	 					window.location.href = 'd_login.php';
	 					</script>
	 					";
	 				/*query else*/
	 			}
	 	}
	 	else {
	 		/*login click check*/
	 	}


	 	?>
	 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
