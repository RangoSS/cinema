<?php include('connect.php'); ?>
<html>
<head>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:800px;margin:auto;}
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
<fieldset style='width:500px;height:600px;margin:auto;background-color:white'>
<center><h2 style='image:url('images/1.jpg');text-decoration:underline'>Room booking</h2><hr>
<label style='color:green'>Please check the availability of rooms before making a booking</label></center><hr><br>
<div style='text-align:left;width:350px;margin-left:auto;'>
<form method='POST'>
<div style='width:300px;image:url('images/1.jpg');margin-left:-40px;'>
<?php
$client_id = $_GET['client_id'];
$username = $_GET['username'];
$contact = $_GET['contact'];
$query = "SELECT * FROM clients WHERE client_id = '$client_id'";
$result = mysql_query($query);

$row = mysql_fetch_array($result);
$uname = $row['name'];
$mobile = $row['mobile'];
$surname = $row['surname'];
$username = $uname.' '.$surname;
?>
<label style='float:left;'>Customer_name</label><label style='float:right;'><input type='text' disabled value="<?php echo $username;?>" name='username'></input></label><br><hr>
<label style='float:left;'>Contact Number</label><label style='float:right;'><input type='text' disabled value='<?php echo $mobile;?>' name='contact'></input></label><br><hr>
<label style='float:left;'>Night/s:</label><label style='float:right;'><select name='nights'><option>1</option><br><hr>
<option>2</option><option>3</option><option>4</option><option>5+</option></select></label><br><hr>
<label>Room/s:</label><label style='float:right;'><select name='rooms'><option>1</option><br><hr>
<option>2</option><option>3</option><option>4</option><option>5+</option></select></label><br><hr>
<label>Room type:</label><label style='float:right;'><select name='roomType'><option>--Select room type--</option><option>Junior</option><option>Standard</option><br><hr>
<option>Superior</option><option>Family</option><option>Premier</option></select></label><br><hr>
<label style='float:left;'>Adults:</label><label style='float:right;'><select name='numAdults'><option>1</option>
<option>2</option><option>3</option><option>4</option><option>5+</option></select></label><br><hr>
<label>Childrens:</label><label style='float:right;'><select name='numChildren'><option>1</option>
<option>2</option><option>3</option><option>4</option><option>5+</option></select></label><br><hr>

<label>Location:</label><label style='float:right;'><select name='location'>
<option>-Select Location-</option><option>Arcadia</option><option>Eastlyn</option><option>Mamelodi</option><option>Sunnyside</option><option>Centurion</option>
<option>Garsfontein</option><option>Pretoria North</option><option>Soshanguve</option><option>Marabastard</option><option>Menlyn</option><option></option>

</select>
</label>
<br><hr><center>
<label style='float:left;'>Check-in Date:</label><label style='float:right;'><input type='date' name='in'></input></label><br><br><hr>&nbsp &nbsp &nbsp
<label style='float:left;'>Check-out Date:</label><label style='float:right;'><input type='date' name='out'></input></label><br><br><hr>&nbsp &nbsp &nbsp
<input type='submit' name='book' Value='&nbsp Next &nbsp'></input>&nbsp &nbsp &nbsp <input type='submit' name='cancel' Value='Cancel'></input><hr>

</div>
</form>
<?php
	$client_id = $_GET['client_id'];
	@$username = $_POST['username'];
	@$contact = $_POST['contact'];
	@$nights  = $_POST['nights'];
	@$roomsNum = $_POST['rooms'];
	@$roomType = $_POST['roomType'];
	@$numAdults = $_POST['numAdults'];
	@$numChildren = $_POST['numChildren'];
	@$location = $_POST['location'];
	@$date_in = $_POST['in'];
	@$date_out = $_POST['out'];
	@$booking_id = Substr($username,0,2).rand(22222,999999).Substr($roomType,0,3).date('Y');
	@$client_id = "CUST".rand(00000,999999).'-'.Substr($location,0,3);
	//Buttons
	@$book = $_POST['book'];
	@$cancel = $_POST['cancel'];																
if(isset($book)){
		$client_id = $_GET['client_id'];
		$username = $_GET['username'];
		$contact = $_GET['contact'];
		$query = "SELECT * FROM clients WHERE client_id = '$client_id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$uname = $row['name'];
		$mobile = $row['mobile'];
		if($roomType !='--Select room type--'){
			echo "<script type='text/JavaScript'>window.location = 'client_confirm_booking.php?client_id=$client_id&booking_id=$booking_id&username=$uname&contact=$mobile&nights=$nights&numRoom=$roomsNum&roomType=$roomType&numAdults=$numAdults&numChildren=$numChildren&location=$location&datein=$date_in&dateout=$date_out'</script>";
		}else{
			echo "<script type='text/JavaScript'>alert('Note: Please select a room type before proceeding! ');</script>";
		}
	
}elseif($cancel){
		$client_id = $_GET['client_id'];
		$username = $_GET['username'];
		$contact = $_GET['contact'];
		$query = "SELECT * FROM clients WHERE client_id = '$client_id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$uname = $row['name'];
		$mobile = $row['mobile'];
	echo "<script type='text/JavaScript'>window.location = 'client.php?client_id=$client_id&contact=$mobile&username=$uname'</script>";
}
?>
</div>


</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>