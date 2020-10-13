<!DOCTYPE html>
<?php include("config.php"); ?>
<html>
<head>
	<title>Notification From Doctor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/web1.css">
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Digital Health Consultant</marquee> </h2>
    </div>
</head>
<body>
<div class="container-fluid">
	<div class="card">
		<div class="card-body" style="background-color: #3498DB; color: #ffffff;">
			<div class="row">
			<div class="col-md-1">
			<a href="patient.php" class="btn btn-success">Back</a></div>
			<div class="col-md-3"><h3>Notification From Doctor</h3></div>
			
		</div></div>
		<div class="card-body" style="background-color: #3498DB; color: #ffffff;">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Disease</th>
					<th>Medicine Name</th>
					<th>Morning</th>
					<th>Afternoon</th>
					<th>Night</th>
					<th>After Food</th>
					<th>Before Food</th>
					<th>Dcotor Name</th>
					<th>Contact</th>
					<th>Date</th>
					<th>Order Medicine</th>
				</tr>
			</thead>
			<tbody>
				<?php get_view_prescrip(); ?>
			</tbody>
			</thead>
		</table>
	</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>