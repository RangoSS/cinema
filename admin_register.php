<?php include('connect.php');?>
<html>
<head>
<style type='text/css'>#head{background-image:url('images/1.jpg');width:800px;height:150px;margin:auto;}
#body{background-image:url('images/1.jpg');width:800px;height:700px;margin:auto;}
#footer{background-image:url('images/1.jpg');width:800px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}

</style>
</head>
<body>

<div id='head'><br><br><br>
<div style='background-color:white;width:500px;height:30px;margin:auto;padding:5px;'><center>
<?php include('links.php'); ?>
</div>
</div>
<hr>
<div id='body'><br><br>
<fieldset style='width:500px;height:600px;background-color:white;margin:auto'><br>
<label style='color:blue;'>Please make sure you enter your details accurately:</label>
<hr> 
<br>

<form method='POST'>
<label style='float:left;'>Admin Name:</label><label style='float:right;'><input type='text'  name='username'></input></label><br><hr>
<label style='float:left;'>Surname:</label><label style='float:right;'><input type='text' name='surname'></input></label><br><hr>
<label style='float:left;'>ID Number:</label><label style='float:right;'><input type='text'  name='id_number'></input></label><br><hr>
<label style='float:left;'>Date of Birth:</label><label style='float:right;'><input type='text'  name='dob'></input></label><br><hr>
<label style='float:left;'>Nationality:</label><label style='float:right;'><input type='text' name='nationality'></input></label><br><hr>
<label style='float:left;'>Mobile:</label><label style='float:right;'><input type='text' name='mobile'></input></label><br><hr>
<label style='float:left;'>Email:</label><label style='float:right;'><input type='text' name='email'></input></label><br><hr>
<label style='float:left;'>Address:</label><label style='float:right;'><input type='text' name='address'></input></label><br><hr>
<label style='float:left;'>Gender</label><label style='float:right;'><input type='text' name='gender'></input></label><br><hr>
<label style='float:left;'>Password:</label><label style='float:right;'><input type='text' name='password'></input></label><br><hr><br>

<center><input type='submit' name='register' value='Register'></input>-<input type='submit' name='close' value='Cancel'></input>

</form>
<?php
	$staff_id = "STF".rand(222222,9999999).date('mdY').rand(00,99);
	$name = $_POST['username'];
	$surname = $_POST['surname'];
	$dob = $_POST['dob'];
	$nationality = $_POST['nationality'];
	$mobile  = $_POST['mobile'];
	$email  = $_POST['email'];
	$address = $_POST['address'];
	$identity_nr = $_POST['id_number'];
	$gender = $_POST['gender'];

	$password = $_POST['password'];
	$nationality  = $_POST['nationality'];
	$comfirm = $_POST['register'];
	$cancel = $_POST['close'];
	
	$admin_id = $_GET['admin_id'];
	if(isset($comfirm)){
		$client_id = "HJKL".rand(1000011,99999908).'KJHGH';
		$query = "INSERT INTO staff VALUES('$staff_id','$name','$surname','$mobile','$nationality','$email','$gender','$dob','$identity_nr','$address','$password')";
		$result = mysql_query($query)or die(mysql_error($query));
		if($result){
		echo "<script type='text/JavaScript'>alert('Admin member successfully registered');window.location = 'login.php?login_id=admin';</script>";
		}else{
			echo "<script type='text/JavaScript'>Alert('Error:Data not entered..!');</script>";
		}
	}elseif(isset($cancel)){
		echo "<script type='text/JavaScript'>window.location = 'login.php?login_id=admin';</script>";
	}
	
?>
</fieldset>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>

</body>
</html>