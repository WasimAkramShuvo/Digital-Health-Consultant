<?php
/*include kora hbe config.php*/
include 'config.php';
?>

<!--Doc type - Tutorial work-->

<!DOCTYPE html>
<html>
<head>
	<title>Pharmacist Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/web1.css">
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Digital Health Consultant</marquee> </h2>
    </div>
</head>

<body id="b">
	 <div id="d"> 
	 	<form action="phr_reg.php" method="POST" align="center">
	 		<center><img src="images/pharmacist.png" class="img" align="center"></center>

			  <b>
			  <label>User-Name</label>
	 		  <input type="text" name="username" id="form" placeholder="Enter your Name" required>
	 		  <br>
	 		  <b>
	 		  <label>User-Email</label>
	 		  <input type="email" name="email" id="form" placeholder="Enter your Email" required><br>
	 		  <b>
	 		  <label>User-Password</label>
	 		  <input type="password" name="password" id="form" placeholder="Enter your Password" required><br>
	 		  <b> 
	 		  <label>Confirm-Password</label>
	 		  <input type="password" name="cpass" id="form" placeholder="Confirm your Password" required>

	 		  <input type="submit" name="phr_reg" class="btn btn-success" value="Sign-Up">

	 		  <a href="phr_login.php"><input type="button" name="back" class="btn btn-primary" value="Back to Log-In"></a>
	 	</form>

	 	<!-- registration from thekey db tey connect -->
	 	<?php
	 	/*sign-p button a click holo kina!!!*/
	 	if (isset($_POST ['phr_reg'])) {/*isset = pre defined function */
	 		$username = $_POST ['username'];
	 		$email = $_POST ['email'];
	 		$password = $_POST ['password'];
	 		$cpass = $_POST ['cpass'];

	 		/*cpass ta fully pass er moto holo kina!!*/
	 		if ($password == $cpass) {
	 			$query = "select * from phr_reg where email= '$email'";/*1 ta email 1 bar i hbe...test.*/
	 			$query_check = mysqli_query ($con, $query);
	 			if($query_check){

	 				if(mysqli_num_rows ($query_check > 0)){
	 					/*email a (0) er beshi hle registration hbe na..tai (JS) er maddome alert show korbe..*/
	 					echo "
	 					<script>
	 					alert ('Email Alreary In Use');
	 					window.location.href = 'phr_login.php'; </script>";
	 					/*email register hoar por login a pathano lagbe..*/
	 				}
	 				else {
	 					$insertion = "INSERT INTO phr_reg(username, email, password)
             			values ('$username','$email', '$password')"; 
	 					/* or "insert into user1 values 
	 						('$name', '$email', '$pass')"; */
	 					$run = mysqli_query ($con, $insertion);

	 					/*email check else..jdi register na hoy thn insert kortey hbe*/
	 					if($run){/*run check*/
	 						echo "
	 					<script>
	 					alert ('You are succesfully register');
	 					window.location.href ='phr_reg.php'; 
	 					
	 					</script>
	 					";
	 					/*user register hle home page a pathano lagbe..*/
	 					}
	 					else {
	 						echo "
	 						<script>
	 						alert ('Connection
	 						Faild');
	 						window.location.href
	 						= 'phr_reg.php'; 
	 						</script>
	 						";
	 						/*insertion complt 
	 						hoy nai..connection
	 						failed hle reg.php
	 						tey pathabo...*/
	 						/*run else*/
	 					}

	 				}
	 			}
	 			else {
	 				echo "
	 				<script>
	 				alert ('Database error!');
					window.location.href
					='phr_reg.php';
					</script>
	 				";
	 				/*cheking a db error hle 
	 				reg.php tey pathabo...*/
	 				
	 				/*query checking er else*/
	 			}
	 		}
	 		else {
	 			echo "
				<script>
				alert ('Password & 
				Confirm-Password doesn't match');
				window.location.href ='phr_reg.php'; 
				</script>
				";
				/*pass r cpass match na korley 
				reg.php tey pathabo...*/
				
	 		}		/*password else*/

	 	}	 	
	 	else {

	 	}			/*isset else*/


	 	?>
	 	
	 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
