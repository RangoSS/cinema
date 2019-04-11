<html>
<head>
<?php
include('connect.php');
?>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

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
	width:850px;
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

<div style='border:solid thin silver;width:850px;height:auto;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br>
<label style='color:red;'>View and Process bookings here:</label>
<br>
<hr><center>

<table border='1'>
<tr>
<th>Customer Name</th><th>Contact</th><th>Location</th><th>Nights</th><th>Adults</th><th>Children</th>
<th>Room Type</th><th>Check-in Date</th><th>Check-out Date</th><th>Action</th>
</tr>
<?php
$query = "SELECT * FROM bookings";
@$results = mysql_query($query);
while($rows = mysql_fetch_array($results)){
	$client_id = $rows['client_id'];
	$customer_name = $rows['customer_name'];
	$contact = $rows['customer_contact'];
	$location = $rows['hotel_location'];
	$nights = $rows['nights'];
	$adults = $rows['adults'];
	$children = $rows['children'];
	$room_type = $rows['room_type'];
	@$datein = $rows['date_in'];
	@$dateout = $rows['date_out'];
	$booking_id = $rows['booking_id'];
	
	echo "<tr>";
	echo "<td>$customer_name</td><td>$contact</td><td>$location</td><td>$nights</td><td>$adults</td><td>$children</td>
	<td>$room_type</td><td>$datein</td><td>$dateout</td><td><a href='review_booking.php?booking_id=$booking_id&customer_name=$customer_name'>Review Booking</a></td>";
	echo "</tr>";
}
?>

</table>
<hr>
<form method='POST'>
<input type='submit' name='back' value='Go back to main manu'></input>
</form>
<br>
<?php
@$back = $_POST['back'];
if(isset($back)){
	
		echo "<script type='text/JavaScript'>window.location = 'admin.php';</script>";
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