<?php
include 'connection.php';

if(!$conn){
	die('Connection failed!' . mysqli_connect_error());
}
else{
	$fn = $_POST['fname_applicant'];
	$ln = $_POST['lname_applicant'];
	$bdate = $_POST['birthdate'];
	$gender = $_POST['gender_info'];
	$address1 = $_POST['street_address1'];
	$address2 = $_POST['street_address2'];
	$city = $_POST['city'];
	$region = $_POST['region'];
	$postal_zipcode = $_POST['postal_zip'];
	$status = $_POST['status'];

	$sql = "INSERT INTO information(first_name, last_name, date_of_birth, gender, address_1, 
		address_2, city, region, postal_zipcode, status) VALUES('$fn', '$ln','$bdate','$gender', 
		'$address1', '$address2', '$city', '$region', '$postal_zipcode', '$status')";
	if(mysqli_query($conn, $sql)){
	echo "New Record Created!";
	header("Location: create.php");
	}
}

?>