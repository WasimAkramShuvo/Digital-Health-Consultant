<!DOCTYPE html>
<html>
<head>
	<title>Doctor Appointment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/web1.css">
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Digital Health Consultant</marquee> </h2>
    </div>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-1">
	<a href="patient.php" class="btn btn-success">Back</a></div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB; color: #ffffff;">
				Book an Appointment
			</div>
			<div class="card-body">			
				<form class="form-group" action="config.php" method="post">
					<label>First Name</label>
					<input type="text" name="fname" placeholder="First Name" class="form-control"><br>
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="Last Name" class="form-control"><br>
					<label>Gender</label>
					<select class="form-control" name="gender">
						<option value="">--Gender--</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select><br>
					<label>Email Id</label>
					<input type="text" name="email" placeholder="Email Id" class="form-control"><br>
					<label>Select Diseases</label>
					<select class="form-control" name="disease">
						<option value="">--Diseases--</option>
						<option value="fever">Fever</option>
						<option value="heart">Heart</option>
						<option value="cancer">Cancer</option>
						<option value="liver">Liver</option>
					</select><br>
					<label>Symptoms</label>
					<input type="textarea" row="4" col="30" placeholder="Please write your Symptoms" name="symp" class="form-control"><br>
					<label>Select Doctor</label>
					<select class="form-control" name="docname">
						<option value="">--Select Doctor--</option>
						<option value="Dr Ashik">Dr Ashik</option>
						<option value="Dr Taiyebah">Dr Taiyebah</option>
						<option value="Dr Shuvo">Dr Shuvo</option>
					</select><br>
					<label>Contact</label>
					<input type="text" name="contact" placeholder="Contact" class="form-control"><br>
					<label>Date</label>
					<input type="date" name="date" class="form-control"><br>

					<input type="submit" name="pat_submit" value="Enter Appointment" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>