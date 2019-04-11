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
<label style='color:blue;'>Please review and edit your account details here:</label>
<hr> 
<br>

<?php
$client_id = $_GET['client_id'];
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
<label style='float:left;'>Client ID:</label><label style='float:right;'><input type='text' disabled value="<?php echo $client_id;?>" name='username'></input></label><br><hr>
<label style='float:left;'>Client Name:</label><label style='float:right;'><input type='text' value="<?php echo $username;?>" name='username'></input></label><br><hr>
<label style='float:left;'>Surname:</label><label style='float:right;'><input type='text' value="<?php echo $surname;?>" name='surname'></input></label><br><hr>
<label style='float:left;'>ID Number:</label><label style='float:right;'><input type='text' disabled value="<?php echo $client_id_number;?>" name='id_number'></input></label><br><hr>
<label style='float:left;'>Date of Birth:</label><label style='float:right;'><input type='text' value="<?php echo $dob;?>" name='dob'></input></label><br><hr>
<label style='float:left;'>Nationality:</label><label style='float:right;'><input type='text' value="<?php echo $nationaty;?>" name='nationality'></input></label><br><hr>
<label style='float:left;'>Mobile:</label><label style='float:right;'><input type='text' value="<?php echo $mobile;?>" name='mobile'></input></label><br><hr>
<label style='float:left;'>Email:</label><label style='float:right;'><input type='text' value="<?php echo $email;?>" name='email'></input></label><br><hr>
<label style='float:left;'>Address:</label><label style='float:right;'><input type='text' value="<?php echo $address;?>" name='address'></input></label><br><hr>
<label style='float:left;'>Occupation:</label><label style='float:right;'><input type='text' value="<?php echo $occupation;?>" name='occupation'></input></label><br><hr>
<label style='float:left;'>Gender</label><label style='float:right;'><input type='text' value="<?php echo $gender;?>" name='gender'></input></label><br><hr>
<label style='float:left;'>Password:</label><label style='float:right;'><input type='text' value="<?php echo $password ;?>" name='password'></input></label><br><hr><br>
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
	@$occupation = $_POST['occupation'];
	@$gender = $_POST['gender'];
	@$password = $_POST['password'];
	
	@$comfirm = $_POST['confirm'];
	@$cancel = $_POST['close'];
	
	$client_id = $_GET['client_id'];
	if(isset($comfirm)){
		$query = "UPDATE clients SET name='$username',surname='$surname',dob='$dob',nationality='$nationality',mobile='$mobile',email='$email',address='$address',occupation='$occupation',gender='$gender',password='$password' WHERE client_id='$client_id'";
		$result = mysql_query($query)or die(mysql_error());
		if($result){
		echo "<script type='text/JavaScript'>alert('Account Successfully Updated..!');window.location = 'client.php?client_id=$client_id&contact=$mobile&username=$username';</script>";
		}
	}elseif(isset($cancel)){
		echo "<script type='text/JavaScript'>window.location = 'client.php?client_id=$client_id&contact=$mobile&username=$username';</script>";
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