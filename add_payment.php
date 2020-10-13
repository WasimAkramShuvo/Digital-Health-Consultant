<!DOCTYPE html>
<html>
<head>
	<title>Add Payment</title>
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
				Payment System
			</div>
			<div class="card-body">			
				<form class="form-group" action="config.php" method="post">
					<label>Patient Name</label>
					<input type="text" name="p_name" placeholder="Patient Name" class="form-control"><br>
					<label>Medicine Name</label>
					<select class="form-control" name="med_name">
						<option value="">--Medicine--</option>
						<option value="Napa">Napa</option>
						<option value="Finix">Finix</option>
						<option value="Galvas">Galvas</option>
						<option value="Encronrate Crono">Encronrate Crono</option>
						<option value="Amdocol Plus">Amdocol Plus</option>
					</select><br>
					<label>Quantity</label>
					<select class="form-control" name="quan">
						<option value="">--Quantity--</option>
						<option value="5pc">5pc</option>
						<option value="10pc">10pc</option>
						<option value="Full box">Full box</option>
					</select><br>
					
					<label>Amount</label>
					<input type="text" name="amount" placeholder="Amount" class="form-control"><br>
					<label>Payment</label>
					<select class="form-control" name="payment">
						<option value="">--Payment--</option>
						<option value="Cash">Cash</option>
						<option value="Credit Card">Credit Card</option>
						<option value="bkash">bkash</option>
					</select><br>
					<label>Date</label>
					<input type="date" name="date" class="form-control"><br>

					<input type="submit" name="payment_submit" value="Payment" class="btn btn-primary">
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