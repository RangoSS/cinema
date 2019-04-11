<?php include('connect.php');?>
<html>
<head>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:700px;margin:auto;}
#footer{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}

</style>
</head>
<body>
<div id="wrapper">
<div id='head'><br><br><br>
<div style='background-color:white;width:500px;height:30px;margin:auto;padding:5px;'><center>
<?php include('links.php'); ?>
</div>
</div>
<hr>
<div id='body'><br><br>
<fieldset style='width:500px;height:600px;background-color:white;margin:auto'><br>
<label style='color:blue;'>Please enter the details for the new staff member:</label>
<hr> 
<br>

<?php
@$client_id = $_GET['client_id'];
$query = "SELECT * FROM clients WHERE client_id = '$client_id'";
$result = mysql_query($query)or die(mysql_error());
$rows = mysql_fetch_array($result);
$username = $rows['name'];
$surname = $rows['surname'];
$client_id_number = $rows['id_number'];
 $dob = $rows['dob'];
 $nationaty = $rows['nationality'];
 $mobile  = $rows['mobile'];
 $email  = $rows['email'];
$address = $rows['address'];
$occupation = $rows['occupation'];
$gender = $rows['gender'];
$password = $rows['password'];

?>
<form method='POST'>
<label style='float:left;'>Staff Name:</label><label style='float:right;'><input type='text'  name='username'></input></label><br><hr>
<label style='float:left;'>Surname:</label><label style='float:right;'><input type='text' name='surname'></input></label><br><hr>
<label style='float:left;'>ID Number:</label><label style='float:right;'><input type='text'  name='id_number'></input></label><br><hr>
<label style='float:left;'>Date of Birth:</label><label style='float:right;'><input type='text'  name='dob'></input></label><br><hr>
<label style='float:left;'>Department:</label><label style='float:right;'><input type='text' name='department'></input></label><br><hr>
<label style='float:left;'>Mobile:</label><label style='float:right;'><input type='text' name='mobile'></input></label><br><hr>
<label style='float:left;'>Email:</label><label style='float:right;'><input type='text' name='email'></input></label><br><hr>
<label style='float:left;'>Salary:</label><label style='float:right;'><input type='text' name='salary'></input></label><br><hr>
<label style='float:left;'>Address:</label><label style='float:right;'><input type='text' name='address'></input></label><br><hr>
<label style='float:left;'>Nationality:</label><label style='float:right;'><input type='text' name='nationality'></input></label><br><hr>
<label style='float:left;'>Gender</label><label style='float:right;'><input type='text' name='gender'></input></label><br><hr>
<label style='float:left;'>Password:</label><label style='float:right;'><input type='text' name='password'></input></label><br><hr><br>

<center><input type='submit' name='confirm' value='Confirm'></input>-<input type='submit' name='close' value='Cancel'></input>

</form>
<?php
	  
	@$username = $_POST['username'];
	@$surname = $_POST['surname'];
	$client_id_number = $rows['id_number'];
	@$dob = $_POST['dob'];
	@$nationality = $_POST['nationality'];
	@$mobile  = $_POST['mobile'];
	@$email  = $_POST['email'];
	@$address = $_POST['address'];
	@$identity_nr = $_POST['id_number'];
	@$department = $_POST['department'];
	@$gender = $_POST['gender'];
	@$salary = $_POST['salary'];
	@$password = $_POST['password'];
	@$nationality  = $_POST['nationality'];
	@$comfirm = $_POST['confirm'];
	@$cancel = $_POST['close'];
	
	@$client_id = $_GET['client_id'];
	if(isset($comfirm)){
		$staff_number = "STF".rand(0000011,99999908).subStr($username,3);
		$query = "INSERT INTO staff VALUES('$staff_number','$username','$surname','$department','$email','$mobile','$address','$dob','$identity_nr','$nationality','$salary','$gender','$password')";
		$result = mysql_query($query)or die(mysql_error());
		if($result){
		echo "<script type='text/JavaScript'>alert('Staff member successfully registered');window.location = 'admin.php';</script>";
		}
	}elseif(isset($cancel)){
		echo "<script type='text/JavaScript'>window.location = 'admin.php';</script>";
	}
	
?>
</fieldset>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>