<!DOCTYPE html>
<html>
<head>
	<title>Add Pharmacist</title>
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
	<a href="admin.php" class="btn btn-success">Back</a></div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB; color: #ffffff;">
				Add Pharmacist
			</div>
			<div class="card-body">			
				<form class="form-group" action="config.php" method="post">
					<label>First Name</label>
					<input type="text" name="fname" class="form-control"><br>
					<label>Last Name</label>
					<input type="text" name="lname" class="form-control"><br>
					<label>Gender</label>
					<select class="form-control" name="gender">
						<option>--Gender--</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select><br>
					<label>Email Id</label>
					<input type="text" name="email" class="form-control"><br>
					<label>Contact</label>
					<input type="text" name="contact" class="form-control"><br>
					
					<input type="submit" name="add_phar_submit" value="Add" class="btn btn-primary">
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