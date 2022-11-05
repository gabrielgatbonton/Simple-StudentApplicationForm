<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-dark text-white">
	<h1 style="text-align:center;">Student Registration Form</h1>
	<table style="margin-left:auto;margin-right:auto;">
	<form action="register.php" method="post">	
		<tr>
			<td>
				<label for="name_applicant">Name of the Applicant</label><br>
				<div>
					<input type="text" name="fname_applicant" id="name_applicant" placeholder="First" style="height: 30px;" required>
				</div>
			</td>
			<td>
				<br>
				<input type="text" name="lname_applicant" id="name_applicant" placeholder="Last" style="height: 30px;" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<label for="birthdate">Date of Birth</label>
				<div>
					<input type="Date" name="birthdate" id="birthdate" style="width:380px;height: 30px;" required>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<label for="gender">Gender</label>
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name='gender_info' value='Male' id="gender" required>Male
			</td>
			<td>
				<input type="radio" name='gender_info' value='Female' id="gender" style="text-align:center;" required>Female	
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<label for="address">Address</label>
				<div>
					<input type="text" name="street_address1" id="address" placeholder="Street Address" style="width: 380px;height: 30px;" required><br><br>
					<input type="text" name="street_address2" id="address" placeholder="Street Adress Line 2" style="width:380px;height: 30px;" required><br><br>
					<input type="text" name="city" placeholder="City" style="height: 30px;" required>
					<input type="text" name="region" placeholder="Region" style="height: 30px;" required><br><br>
					<input type="text" name="postal_zip" placeholder="Postal / Zipcode" style="height: 30px;" required>
				<select name="status" style="width: 188px;height: 35px;" required>
					<option value="" disabled selected>Please Select</option>
					<option value="Single">Single</option>
					<option value="Married">Married</option>
				</select>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2"><br></td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					<input type="submit" name="submit" class="btn btn-light">
				</div>
			</td>
			<td>
				<div style="text-align:center;">
					<a class="btn btn-danger" href="list.php">See Student List</a>
				</div>
			</td>
		</tr>
	</form>
	<tr>
		<td colspan="2">
			<h6 style="text-align: center;">Gabriel Alfonso M. Gatbonton - CCIS3A</h6>
		</td>
	</tr>
	</table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>			
</body>
</html>