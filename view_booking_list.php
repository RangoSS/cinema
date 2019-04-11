<html>
<?php include('connect.php');?>
<head>
<?php
include('connect.php');
?>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:600px;margin:auto;}
#footer{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}
table{
	background-color:green;
	box-shadow: inset 9px 6px 8px rgba(222,255,255,.5);
}
th{
	color:silver;
	padding:5px;
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
<div id='body'><br><br><br>
<div style='border:solid thin silver;padding-bottom:30px;width:650px;height:auto;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br>
<form method='POST'>
<label style='color:green;'>List of bookings made by you:</label>
<hr><center>
<table border='1'>
<tr>
<th>Location</th><th>Room Type</th><th>Check-in Date</th><th>Check-out Date</th><th>Total Price</th><th>Booking Status</th><th>Remove booking</th>
</tr>
<?php 
$client_id = $_GET['client_id'];
$query = "SELECT * FROM bookings WHERE client_id = '$client_id'";
$username = $_GET['username'];
		$contact = $_GET['contact'];
$results = mysql_query($query);

while($rows = mysql_fetch_array($results)){
$location = $rows['hotel_location'];
$roomType = $rows['room_type'];
@$datein = $rows['date_in'];
@$dateout = $rows['date_out'];
$status = $rows['status'];
$Total_price = $rows['Total_price'];
$booking_id = $rows['booking_id'];
//select from client

echo "<tr>";
echo "<td>$location</td><td>$roomType</td><td>$datein</td><td>$dateout</td><td>R $Total_price</td><td>$status</td><td><center><a href='remove_booking.php?client_id=$client_id&contact=$contact&username=$username&booking_id=$booking_id'>Remove</a></td>";
echo "</tr>";
}

?>
</table><hr>
<br>
<center><input type='submit' value='Return to client Manu' name='cancel'></input>
</form>
<?php
$client_id = $_GET['client_id'];
@$return = $_POST['cancel'];
@$cancel = $_POST['cancel'];

		$query = "SELECT * FROM clients WHERE client_id = '$client_id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$username = $row['name'];
		$contact  = $row['mobile'];
if(isset($return)){
	echo "<script type='text/JavaScript'>window.location = 'client.php?client_id=$client_id&contact=$contact&username=$username';</script>";
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