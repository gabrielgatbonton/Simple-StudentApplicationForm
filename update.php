<?php
include 'connection.php';

if(!$conn){
    die("Connection Unsuccessfully");
}
else{
    $id = $_GET['id'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $birth = $_GET['birth'];
    $gender = $_GET['gender'];
    $address1 = $_GET['address1'];
    $address2 = $_GET['address2'];
    $city = $_GET['city'];
    $region = $_GET['region'];
    $postal = $_GET['postal'];
    $status = $_GET['status'];

    $sql = "UPDATE information SET first_name = '$fname', last_name = '$lname', date_of_birth = '$birth', gender = '$gender', address_1 = '$address1', address_2 = '$address2', city = '$city', region = '$region', postal_zipcode = '$postal', status = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        header("location:list.php");
    }
    else{
        echo "Unsuccessful";
    }
}