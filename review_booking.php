
+		<html>
<head>
<?php
include('connect.php');
?>
<style type='text/css'>
#Wrapper{background-image:url('images/downlo.jpg');}
#head{background-image:url('images/download1.jpg');width:990px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:990px;height:auto;margin:auto;padding-bottom:40px;}
#footer{background-image:url('images/download1.jpg');width:990px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}

}
td{
		color:silver;
	padding:5px;
}
table{
	background-color:green;
	box-shadow: inset 9px 6px 8px rgba(222,255,255,.5);
}
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

<div style='border:solid thin silver;width:350px;height:300px;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br>
<label style='color:red;'>View and Process bookings here:</label>
<br>
<form method='POST'>
<hr><center>
<?php 
$get_customer_name = $_GET['customer_name'];
$query = "SELECT * FROM bookings";
$results = mysql_query($query);
$rows = mysql_fetch_array($results);
	$customer_name = $rows['customer_name'];
	@$datein = $rows['date_in'];
	$amount = $rows['Total_price'];
?>
<label style='color:;float:left;'>Client Name:</label><label style='color:;float:right;'><input type='text' disabled value='<?php echo $get_customer_name;?>' name='client_name'></input></label><br><hr>
<?php 	 $booking_id = $_GET['booking_id'];?>
<label style='color:;float:left;'>Booking ID:</label><label style='color:;float:right;'><input type='text' value="<?php echo $booking_id ;?>" disabled name='booking_id'></input></label><br><hr>
<label style='color:;float:left;'>Room availability:</label><div style='color:;float:right;'><input type='radio' value='Available' name='avail'>Available</input> - <input type='radio' value='Not Available' name='avail'>Not Available</input></div><br><hr>

<label style='color:;float:left;'>Booking Date:</label><label style='color:;float:right;'><input type='text' disabled value='<?php echo $datein;?>' name='date'></input></label><br><hr>
<label style='color:;float:left;'>Approve Booking:</label><div style='color:;float:right;'><input type='radio' value='Approved' name='status'>Yes</input> - <input type='radio' value='Not Approved' name='status'>No</input></div><br><hr>
<label style='color:;float:left;'>Total Price(Icl Vat):</label><label style='color:;float:right;'><input type='text' disabled value='R <?php echo $amount;?>' name='price'></input></label><br><hr>

<?php
@$avail = $_POST['avail'];
@$getClient_id = $_GET['client_id'];
?>
<input type='hidden' name='client_id' value="<?php echo $getClient_id;?>"></input>
<input type='submit' name='approve' value='Approve'></input> - <input type='submit' name='decline' value='Decline'></input>
</div>
</div>
</form>
<?php
//other data


//OnClicks
@$approve = $_POST['approve'];
@$decline = $_POST['decline'];
$query = "SELECT * FROM bookings WHERE booking_id = '$booking_id'";
$result = mysql_query($query);
$count = mysql_num_rows($result);

	
@$getClient_id = $_GET['client_id'];
$bookingID = $_GET['booking_id'];
@$avail  = $_POST['avail'];
@$date = $_GET['date'];
@$status = $_POST['status'];
@$price = $_POST['price'];	
@$username = $_GET['username'];
if(isset($approve)){
		if($avail =='Available'){
		$query = "SELECT * FROM bookings WHERE booking_id = '$booking_id'";
		$result = mysql_query($query);
		$count = mysql_num_rows($result);
		
		$query = "UPDATE bookings SET status = 'Approved' WHERE booking_id ='$bookingID'";
		$results = mysql_query($query)or die(mysql_error());
		if($results){
			echo "<script type='Text/JavaScript'>alert('Booking successfully reviewed!!');window.location = 'booking.php'</script>";
		}
	}elseif($avail =='Not Available'){
		echo "<script type='text/javascript'>alert('You have chosen to decline this request.booking not approved!');</script>";
	}
	

}elseif($decline){
	echo "<script type='Text/JavaScript'>alert('Remember you can always come back here to approve the booking!!');window.location = 'booking.php'</script>";
}
?>

<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>