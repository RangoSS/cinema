<?php include('connect.php');?>
<html>
<head>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:550px;margin:auto;}
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
<fieldset style='width:500px;height:450px;margin:auto;background-color:white'>
<center><h2 style='image:url('images/1.jpg');text-decoration:underline'>Administrator Hotel Details Update:</h2><hr>
<?php $hotel_id = $_GET['location_id'];

$query = "SELECT * FROM hotels WHERE location = '$hotel_id'";
$result = mysql_query($query);
$rows = mysql_fetch_array($result);
$location = $rows['location'];
$address = $rows['address'];
$telephone = $rows['telephone'];
$email = $rows['email'];
$rooms_available = $rows['rooms_available'];
 ?>
<form method='POST'>
<label style='color:green'>Details for a hotel in <label style='image:url('images/1.jpg')'><?php echo $hotel_id;?></label></label></center><hr><br>
<div style='text-align:left;width:350px;margin-left:70px;'>
<hr>

<label style='float:left;color:black'>Location:</label><label style='float:right;'><input type='text' value='<?php echo $location;?>' disabled name='location'></input></label><br><hr>
<label style='float:left;color:black'>Address:</label><label style='float:right;'><input type='text' size='20' value='<?php echo $address;?>' name='address'></input></label><br><hr>
<label style='float:left;color:black'>Telephone:</label><label style='float:right;'><input type='text' value='<?php echo $telephone;?>' name='telephone'></input></label><br><hr>
<label style='float:left;color:black'>Email:</label><label style='float:right;'><input type='text' value='<?php echo $email;?>' name='email' size='20'></input></label><br><hr>
<label style='float:left;color:black'>Rooms available:</label><label style='float:right;'><input type='text' value='<?php echo $rooms_available?>' name='rooms'></input></label><br><hr>
<center>
<input type='submit' name='update' value='Update'></input>-<input type='submit' name='abort' value='Abort'></input>

</form>
<?php
@$address = $_POST['address'];
@$email = $_POST['email'];
@$num_rooms = $_POST['rooms'];
@$location = $_POST['location'];
@$telephone = $_POST['telephone'];

$location = $_GET['location_id'];
//click click click
@$abort = $_POST['abort'];
@$update = $_POST['update'];

if(isset($update)){
	$query = "UPDATE hotels SET location='$location',address='$address',telephone='$telephone',email='$email',rooms_available='$num_rooms' WHERE location ='$location'";
	$results = mysql_query($query);
	if($results){
		echo "<script type='text/JavaScript'>alert('Hotel info successfully updated..!');window.location = 'admin_hotel_list.php';</script>";
	}
	
}elseif(isset($abort)){
	echo "<script type='Text/JavaScript'>window.location = 'admin_hotel_list.php';</script>";
}
?>
<br>
<hr>

</div>
</div>



<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>