<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.h {
	background: #ff4d4d;
	padding: 10px; 
	border: 2px solid black;
	color: black;
}

#b {
	
}
#d {
	 height: 660px;
	 width: 400px;
	 background: #dcdde1;
	 border: 3px solid black;
	 border-radius: 25px;  
	 margin: 0 auto;
}

#form {	
	color: black;
	margin: 5px;
	text-align: center;
	padding: 3px;
	height: 30px;
	width: 380px;
}

.img {
	height: 200px;
	width: 200px;
}

#button {
	margin: 5px;
	text-align: center;
	padding: 2px;
	height: 30px;
	width: 380px;
	background-color: red;
	border-radius: 25px;  
	 margin: 0 auto;
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #22D84A;
}
	</style>
	<title>Patient</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Digital Health Consultant</marquee> </h2>
    </div>
</head>
<body id='b'>
<div id="d"> 
	 	<form action="patient.php" method="POST" align="center"> 
	 		<center><img src="images/patient.png" class="img" align="center"></center>
	 		<br>
			  <p><button class="button"><a href="pat_profile.php">My Profile</a></button></p>
			  <p><button class="button"><a href="doc_appoin.php">Doctor Appointment</a></button></p>
			  <p><button class="button"><a href="view_prescrip.php">Notification Doctor</a></button></p>
			  <p><button class="button"><a href="view_bill.php">Notification Pharmacist</a></button></p>
			  <p><button class="button"><a href="order_med.php">Order Medicine</a></button></p>
			  <p><button class="button"><a href="add_payment.php">Payment</a></button></p>
			  <p><button class="button"><a href="pat_feedback.php">Feedback</a></button></p>

	 		  <a href="index.php" type="submit" class="btn btn-success" value="Log-Out">Log-Out</a>
	 	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>