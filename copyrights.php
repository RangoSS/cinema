jj<html>
<head>
<?php
include('connect.php');
?>
<style type='text/css'>#head{background-image:url('images/1.jpg');width:800px;height:150px;margin:auto;}
#body{background-image:url('images/1.jpg');width:800px;height:600px;margin:auto;}
#footer{background-image:url('images/1.jpg');width:800px;height:150px;margin:auto;}
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

<div id='head'><br><br><br>
<div style='background-color:white;width:500px;height:30px;margin:auto;padding:5px;'><center>
<?php include('links.php'); ?>
</div>
</div>
<hr>
<div id='body'><br><br><br>
<div style='border:solid thin silver;padding-bottom:30px;width:490px;height:auto;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br>
<form method='POST'>
<label style='color:green;'>List of bookings made by you:</label>
<hr><center>
<table border='1'>
<tr>
<th>Location</th><th>Room Type</th><th>Date booked</th><th>Booking Status</th>
</tr>
<?php 
$client = $_GET['client_id'];
$query = "SELECT * FROM bookings WHERE client_id = '$client'";
$results = mysql_query($query);
while($rows = mysql_fetch_array($results)){
$location = $rows['location'];
$roomType = $rows['room_type'];
$date = $rows['date'];
$status = $rows['status'];

echo "<tr>";
echo "<td>$location</td><td>$roomType</td><td>$date</td><td>$status</td>";
echo "</tr>";
}

?>
</table><hr>
<br>
<center><input type='submit' value='Remove' name='remove'></input> - <input type='submit' value='Cancel' name='cancel'></input>
</form>

</div>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>

</body>
</html>