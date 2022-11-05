<?php
include 'connection.php';

if(!$conn){
    die('Connection Failed' . mysqli_connect_error());
}
else{
    $getData = "SELECT * FROM information";
    $result = $conn->query($getData);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .center {
            text-align: center;
        }
        table {
            margin-left: auto;
            margin-right: auto;
            padding-top: 20px;
        }
        table td, table th{
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1 class="center">Student Info</h1>
    <p class="center">Student list</p>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Street Address</th>
            <th>Street Address Line 2</th>
            <th>City</th>
            <th>Region</th>
            <th>Postal/Zip Code</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
        <?php while($rows = mysqli_fetch_array($result)){?>
        <tr>
            <td><?php echo $rows['id'];?></td>
			<td><?php echo $rows['first_name'];?></td>
			<td><?php echo $rows['last_name'];?></td>
			<td><?php echo $rows['date_of_birth'];?></td>
			<td><?php echo $rows['gender'];?></td>
			<td><?php echo $rows['address_1'];?></td>
            <td><?php echo $rows['address_2'];?></td>
            <td><?php echo $rows['city'];?></td>
            <td><?php echo $rows['region'];?></td>
            <td><?php echo $rows['postal_zipcode'];?></td>
            <td><?php echo $rows['status'];?></td>
            <td><?php echo "<a type='button' class='btn btn-light' href='edit.php?id=$rows[id]&lname=$rows[last_name]&fname=$rows[first_name]&birth=$rows[date_of_birth]&gender=$rows[gender]&address1=$rows[address_1]&address2=$rows[address_2]&city=$rows[city]&region=$rows[region]&postal=$rows[postal_zipcode]&status=$rows[status]'>Edit</a>";?></td>
            <td><?php echo "<a type='button' class='btn btn-danger' href='delete.php?id=$rows[id]'>Delete</a>";}?></td>
        </tr>
    </table>
    <div class="center"><a class="btn btn-warning" href="create.php">Create Again!</a></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>