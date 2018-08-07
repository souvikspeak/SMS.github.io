<!DOCTYPE HTML>
<html lang= "en_US">
<head>
	<meta charset="UTF-8">
	<title>Student Management System</title>
</head>
<body>
	<?php include('indexheader.php'); ?>
	
	<div class="title" align="center">
		<h1>Welcome to Student Management System</h1>
		<h3 align="right" style="position: absolute; bottom: 295pt; right: 25pt; margin-right:30px; color=#fff; font-size:20px;"><a href="login.php">Admin Login</a></h3>
	</div>
		

	
	<form method="post" action="index.php">
	<div class="dashboard1">
	<table style="width:30%"; align="center" border="1">
		<tr>
			<td colspan="2" align="center">Student Information</td>
		</tr>
		<tr>
			<td align="left">Choose Standard</td>
			<td>
				<select name="std" required>
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
				<option value="7">7th</option>
				<option value="8">8th</option>
				<option value="9">9th</option>
				<option value="10">10th</option>
				<option value="11">11th</option>
				<option value="12">12th</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="left">Enter Rollno</td>
			<td><input type="text" name="rollno" required </td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
		</tr>
	</table>
	</div>

</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$standard = $_POST['std'];
		$rollno = $_POST['rollno'];
		
		include('dbcon.php');
		include('function.php');
		
		showdetails($standard,$rollno);
	}
?>