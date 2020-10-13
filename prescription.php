<!DOCTYPE html>
<html>
<head>
	<title>Prescription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/web1.css">
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Digital Health Consultant</marquee> </h2>
    </div>
</head>
<body>
<!-- <div class="jumbotron" style="background:url('images/2.jpg')no-repeat; background-size: cover; height: 300px;"></div> --> 
<div class="container-fluid">
<div class="row">
	<div class="col-md-1">
		<a href="doctor.php" class="btn btn-success">Back</a></div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB; color: #ffffff;">
				Prescription
			</div>
			<div class="card-body">			
				<form class="form-group" action="config.php" method="post">
					<label>First Name</label>
					<input type="text" name="fname" placeholder="First Name" class="form-control"><br>
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="Last Name" class="form-control"><br>
					<label>Select Diseases</label>
					<select class="form-control" name="disease">
						<option value="">--Diseases--</option>
						<option value="fever">Fever</option>
						<option value="heart">Heart</option>
						<option value="cancer">Cancer</option>
						<option value="liver">Liver</option>
					</select><br>
					<label>Suggest Medicine</label>
					<select class="form-control" name="med_name">
						<option value="">--Medicine--</option>
						<option value="Napa">Napa</option>
						<option value="Finix">Finix</option>
						<option value="Galvas">Galvas</option>
						<option value="Encronrate Crono">Encronrate Crono</option>
						<option value="Amdocol Plus">Amdocol Plus</option>
					</select><br>
					<label>Morning</label>
					<select class="form-control" name="mor">
						<option value="">--Select--</option>
						<option value="1">1</option>
						<option value="0">0</option>
					</select><br>
					<label>Afternoon</label>
					<select class="form-control" name="aft">
						<option value="">--Select--</option>
						<option value="1">1</option>
						<option value="0">0</option>
					</select><br>
					<label>Night</label>
					<select class="form-control" name="nigh">
						<option value="">--Select--</option>
						<option value="1">1</option>
						<option value="0">0</option>
					</select><br>
					<label>Take On After Food</label>
					<select class="form-control" name="a_food">
						<option value="">--Select--</option>
						<option value="15min">15min</option>
						<option value="30min">30min</option>
						<option value="45min">45min</option>
						<option value="No">No</option>
					</select><br>
					<label>Take On Before Food</label>
					<select class="form-control" name="b_food">
						<option value="">--Select--</option>
						<option value="15min">15min</option>
						<option value="30min">30min</option>
						<option value="45min">45min</option>
						<option value="No">No</option>
					</select><br>
					<label>Doctor Name</label>
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

					<input type="submit" name="prescription_submit" value="Enter Prescribe" class="btn btn-primary">
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