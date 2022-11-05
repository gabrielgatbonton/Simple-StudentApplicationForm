<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        table{
            margin-left: auto;
            margin-right: auto;
            
        }
        h1{
            text-align: center;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <table>
    <form action="update.php" method="get">
        <tr>
            <td colspan="2"><h1>Edit Page</h1></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ;?>">
                <label for="fname">First Name:</label><br>
                <input type="text" name="fname" id="fname" value="<?php echo $_GET['fname'];?>" style="width:380px;">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="lname">Last Name:</label><br>
                <input type="text" name="lname" id="lname" value="<?php echo $_GET['lname'];?>"style="width:380px;">
            </td>
        </tr>
            <td colspan="2">
                <label for="birth">Date of Birth:</label><br>
                <input type="date" name="birth" id="birth" style="width:380px;">
            </td>
        </tr>
        <tr>
            <td colspan="2"><label for="gender">Gender:</label></td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="gender" id="gender" value="Male" required>Male
            </td>
            <td>
                <input type="radio" name="gender" id="gender" value="Female" required>Female
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="address">Address</label>
                <div>
                    <input type="text" name="address1" id="address" value="<?php echo $_GET['address1'];?>" style="width: 380px;height: 30px;" required><br><br>
					<input type="text" name="address2" id="address" value="<?php echo $_GET['address2'];?>" style="width:380px;height: 30px;" required><br><br>
					<input type="text" name="city" value="<?php echo $_GET['city'];?>" style="height: 30px;" required>
					<input type="text" name="region" value="<?php echo $_GET['region'];?>" style="height: 30px;" required><br><br>
					<input type="text" name="postal" value="<?php echo $_GET['postal'];?>" style="height: 30px;" required>
				    <select name="status" style="width: 188px;height: 35px;" required>
					    <option value="" disabled selected>Please Select</option>
					    <option value="Single">Single</option>
					<option value="Married">Married</option>
				</select>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <br>
            </td>
        </tr>
        <tr>
            <td class="center">
                <input class="btn btn-danger" type="submit" value="Update">
            </td>
            <td class="center">
                <a class="btn btn-light" href="list.php">Back to List</a>
            </td>
        </tr>
    </form>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>			
</body>
</html>