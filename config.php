<?php

/*create variale*/
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dhc';

/*connect database*/
$con = mysqli_connect($localhost, $username, $password, $dbname) or die ('Database error!'); 
/*Database a mysqli select*/
mysqli_select_db ($con, $dbname);

/*doctor appoinmnet  */
if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$disease=$_POST['disease'];
	$symp=$_POST['symp'];
	$docname=$_POST['docname'];
	$contact=$_POST['contact'];
	$date=$_POST['date'];
	$query= "insert into d_appoin(fname,lname,gender,email,disease,symp,docname,contact,date)values('$fname','$lname','$gender','$email','$disease','$symp','$docname','$contact','$date')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Appointment Registerd')</script>";
		echo "<script>window.open('doc_appoin.php' ,'_self')</script>";
	}
}

/* view_appointment */
function get_view_appoin()
{
	global $con;
	$query= "select * from d_appoin";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$gender=$row['gender'];
		$email=$row['email'];
		$disease=$row['disease'];
		$symp=$row['symp'];
		$contact=$row['contact'];
		$date=$row['date'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$gender</td>
				<td>$email</td>
				<td>$disease</td>
				<td>$symp</td>
				<td>$contact</td>
				<td>$date</td>
				<td><a href='prescription.php' class='btn btn-primary'>Prescribe</a></td>
			</tr>";
	}

}
/*add prescription  */
if(isset($_POST['prescription_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$disease=$_POST['disease'];
	$med_name=$_POST['med_name'];
	$mor=$_POST['mor'];
	$aft=$_POST['aft'];
	$nigh=$_POST['nigh'];
	$a_food=$_POST['a_food'];
	$b_food=$_POST['b_food'];
	$docname=$_POST['docname'];
	$contact=$_POST['contact'];
	$date=$_POST['date'];
	$query= "insert into prescription(fname,lname,disease,med_name,mor,aft,nigh,a_food,b_food,docname,contact,date)values('$fname','$lname','$disease','$med_name','$mor','$aft','$nigh','$a_food','$b_food','$docname','$contact','$date')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Prescription registered')</script>";
		echo "<script>window.open('prescription.php' ,'_self')</script>";
	}
}


/* view_prescription or notification doctor */
function get_view_prescrip()
{
	global $con;
	$query= "select * from prescription";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$disease=$row['disease'];
		$med_name=$row['med_name'];
		$mor=$row['mor'];
		$aft=$row['aft'];
		$nigh=$row['nigh'];
		$a_food=$row['a_food'];
		$b_food=$row['b_food'];
		$docname=$row['docname'];
		$contact=$row['contact'];
		$date=$row['date'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$disease</td>
				<td>$med_name</td>
				<td>$mor</td>
				<td>$aft</td>
				<td>$nigh</td>
				<td>$a_food</td>
				<td>$b_food</td>
				<td>$docname</td>
				<td>$contact</td>
				<td>$date</td>
				<td><a href='order_med.php' class='btn btn-primary'> Order Medicine</a></td>
			</tr>";
	}

}

/*add Order  */
if(isset($_POST['order_submit']))
{
	$p_name=$_POST['p_name'];
	$d_name=$_POST['d_name'];
	$med_name=$_POST['med_name'];
	$quan=$_POST['quan'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$date=$_POST['date'];
	$query= "insert into order_med(p_name,d_name,med_name,quan,email,contact,date)values('$p_name','$d_name','$med_name','$quan','$email','$contact','$date')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Order Succesfull')</script>";
		echo "<script>window.open('order_med.php' ,'_self')</script>";
	}
}

/* view_order or notiication patient*/
function get_view_order()
{
	global $con;
	$query= "select * from order_med";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$p_name=$row['p_name'];
		$d_name=$row['d_name'];
		$med_name=$row['med_name'];
		$quan=$row['quan'];
		$email=$row['email'];
		$contact=$row['contact'];
		$date=$row['date'];
		echo "<tr>
				<td>$p_name</td>
				<td>$d_name</td>
				<td>$med_name</td>
				<td>$quan</td>
				<td>$email</td>
				<td>$contact</td>
				<td>$date</td>
				<td><a href='make_bill.php' class='btn btn-primary'>Bill</a></td>
			</tr>";
	}

}

/*add bill  */
if(isset($_POST['bill_submit']))
{
	$p_name=$_POST['p_name'];
	$med_name=$_POST['med_name'];
	$quan=$_POST['quan'];
	$amount=$_POST['amount'];
	$date=$_POST['date'];
	$query= "insert into make_bill(p_name,med_name,quan,amount,date)values('$p_name','$med_name','$quan','$amount','$date')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Bill Succesfull')</script>";
		echo "<script>window.open('make_bill.php' ,'_self')</script>";
	}
}

/* view_bill or notiication pharmacist*/
function get_view_bill()
{
	global $con;
	$query= "select * from make_bill";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$p_name=$row['p_name'];
		$med_name=$row['med_name'];
		$quan=$row['quan'];
		$amount=$row['amount'];
		$date=$row['date'];
		echo "<tr>
				<td>$p_name</td>
				<td>$med_name</td>
				<td>$quan</td>
				<td>$amount</td>
				<td>$date</td>
				<td><a href='add_payment.php' class='btn btn-primary'>CASH/CREDIT</a></td>
			</tr>";
	}

}

/*add Payment  */
if(isset($_POST['payment_submit']))
{
	$p_name=$_POST['p_name'];
	$med_name=$_POST['med_name'];
	$quan=$_POST['quan'];
	$amount=$_POST['amount'];
	$payment=$_POST['payment'];
	$date=$_POST['date'];
	$query= "insert into add_payment(p_name,med_name,quan,amount,payment,date)values('$p_name','$med_name','$quan','$amount','$payment','$date')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Payment Succesfull')</script>";
		echo "<script>window.open('add_payment.php' ,'_self')</script>";
	}
}

/* view_payment or notiication payment*/
function get_view_payment()
{
	global $con;
	$query= "select * from add_payment";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$p_name=$row['p_name'];
		$med_name=$row['med_name'];
		$quan=$row['quan'];
		$amount=$row['amount'];
		$payment=$row['payment'];
		$date=$row['date'];
		echo "<tr>
				<td>$p_name</td>
				<td>$med_name</td>
				<td>$quan</td>
				<td>$amount</td>
				<td>$payment</td>
				<td>$date</td>
			</tr>";
	}

}
/*add patient */
if(isset($_POST['add_pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	
	$query= "insert into add_pat(fname,lname,gender,email,contact)values('$fname','$lname','$gender','$email','$contact')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Add Patient')</script>";
		echo "<script>window.open('add_patient.php' ,'_self')</script>";
	}
}

/* view_patient */
function get_view_patient()
{
	global $con;
	$query= "select * from add_pat";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$gender=$row['gender'];
		$email=$row['email'];
		$contact=$row['contact'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$gender</td>
				<td>$email</td>
				<td>$contact</td>
			</tr>";
	}

}

/*add doctor */
if(isset($_POST['add_doc_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$qualification=$_POST['qualification'];
	$contact=$_POST['contact'];

	
	$query= "insert into add_doc(fname,lname,gender,email,qualification,contact)values('$fname','$lname','$gender','$email','$qualification','$contact')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Add Doctor')</script>";
		echo "<script>window.open('add_doctor.php' ,'_self')</script>";
	}
}

/* view_doctor */
function get_view_doctor()
{
	global $con;
	$query= "select * from add_doc";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$gender=$row['gender'];
		$email=$row['email'];
		$qualification=$row['qualification'];
		$contact=$row['contact'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$gender</td>
				<td>$email</td>
				<td>$qualification</td>
				<td>$contact</td>
			</tr>";
	}

}

/*add pharmacist */
if(isset($_POST['add_phar_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	
	$query= "insert into add_phar(fname,lname,gender,email,contact)values('$fname','$lname','$gender','$email','$contact')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Add Pharmacist')</script>";
		echo "<script>window.open('add_pharmacist.php' ,'_self')</script>";
	}
}

/* view_pharmacist */
function get_view_pharmacist()
{
	global $con;
	$query= "select * from add_phar";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$gender=$row['gender'];
		$email=$row['email'];
		$contact=$row['contact'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$gender</td>
				<td>$email</td>
				<td>$contact</td>
			</tr>";
	}

}
/*add patient feedback */
if(isset($_POST['pat_feedback_submit']))
{
	$feedback=$_POST['feedback'];
	
	$query= "insert into pat_feedback(feedback)values('$feedback')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Feedback Succesfull')</script>";
		echo "<script>window.open('pat_feedback.php' ,'_self')</script>";
	}
}

/* view_patient feedback */
function get_view_pat_feedback()
{
	global $con;
	$query= "select * from pat_feedback";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$feedback=$row['feedback'];
		echo "<tr>
				<td>$feedback</td>
			</tr>";
	}

}

/*add doctor feedback */
if(isset($_POST['doc_feedback_submit']))
{
	$feedback=$_POST['feedback'];
	
	$query= "insert into doc_feedback(feedback)values('$feedback')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Feedback Succesfull')</script>";
		echo "<script>window.open('doc_feedback.php' ,'_self')</script>";
	}
}

/* view_doctor feedback */
function get_view_doc_feedback()
{
	global $con;
	$query= "select * from doc_feedback";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$feedback=$row['feedback'];
		echo "<tr>
				<td>$feedback</td>
			</tr>";
	}

}
/*add pharmacist feedback */
if(isset($_POST['phar_feedback_submit']))
{
	$feedback=$_POST['feedback'];
	
	$query= "insert into phar_feedback(feedback)values('$feedback')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Feedback Succesfull')</script>";
		echo "<script>window.open('phar_feedback.php' ,'_self')</script>";
	}
}

/* view_pharmacist feedback */
function get_view_phar_feedback()
{
	global $con;
	$query= "select * from phar_feedback";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$feedback=$row['feedback'];
		echo "<tr>
				<td>$feedback</td>
			</tr>";
	}

}

/* patient profile */
function get_view_pat_profile()
{
	global $con;
	$query= "select * from add_pat";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$gender=$row['gender'];
		$email=$row['email'];
		$contact=$row['contact'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$gender</td>
				<td>$email</td>
				<td>$contact</td>
			</tr>";
	}

}

/* doctor profile */
function get_view_doc_profile()
{
	global $con;
	$query= "select * from add_doc";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$gender=$row['gender'];
		$email=$row['email'];
		$qualification=$row['qualification'];
		$contact=$row['contact'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$gender</td>
				<td>$email</td>
				<td>$qualification</td>
				<td>$contact</td>
			</tr>";
	}

}

/* pharmacist profile */
function get_view_phar_profile()
{
	global $con;
	$query= "select * from add_phar";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$gender=$row['gender'];
		$email=$row['email'];
		$contact=$row['contact'];
		echo "<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$gender</td>
				<td>$email</td>
				<td>$contact</td>
			</tr>";
	}

}
?>