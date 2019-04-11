<html>
<?php include('connect.php');?>
<head>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:600px;margin:auto;}
#footer{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}
</style>
<script type='text/javascript' src='print.js'></script>
</head>
<body>
<div id="wrapper">

<div id='head'><br><br><br>
<div style='background-color:white;width:500px;height:30px;margin:auto;padding:5px;'><center>
<?php include('links.php'); ?>
</div>
</div>
<hr>
<div id='body'>
<br>
<fieldset style='width:400px;height:500px;margin:auto;background-color:white'>
<center><label style='color:red'>Confirm booking details:</label>
<div id='printSection'>

<form method='POST'>
<?php

	$username = $_GET['username'];
	$contact = $_GET['contact'];
	$nights  = $_GET['nights'];
	$roomsNum = $_GET['numRoom'];
	$roomType = $_GET['roomType'];
	$numAdults = $_GET['numAdults'];
	$numChildren = $_GET['numChildren'];
	$location = $_GET['location'];
	$datein = $_GET['datein'];
	$dateout = $_GET['dateout'];
	$booking_id = $_GET['booking_id'];
	$client_id = $_GET['client_id'];
	//Buttons
	@$book = $_GET['book'];
	@$cancel = $_GET['cancel'];	
if(isset($book)){
	
	//$query = "INSERT INTO bookings VALUE('$booking_id','$client_id','$customer_name','$contact','$location','$nights','$numAdults','$numChildren','$roomType','$date')";
//}elseif($cancel){
//	echo "<script type='text/JavaScript'>window.location = 'home.php'</script>";
//
}
echo "<hr>";
?>
<label style='float:left'>Customer name:</label><strong><label style='float:right;color:blue'><?php echo $username;?></label></strong><br>
<label style='float:left'>Contact number:</label><strong><label style='float:right;color:blue'><?php echo $contact;?></label></strong><br>
<label style='float:left'>Number of Nights:</label><strong><label style='float:right;color:blue'><?php echo $nights;?></label></strong><br>
<label style='float:left'>Number of rooms to book:</label><strong><label style='float:right;color:blue'><?php echo $roomsNum;?></label></strong><br>
<label style='float:left'>Room type:</label><strong><label style='float:right;color:blue'><?php echo $roomType;?></label></strong><br>
<label style='float:left'>Number of Adults:</label><strong><label style='float:right;color:blue'><?php echo $numAdults;?></label></strong><br>
<label style='float:left'>Number Children:</label><strong><label style='float:right;color:blue'><?php echo $numChildren;?></label></strong><br>
<label style='float:left'>Location</label><strong><label style='float:right;color:blue'><?php echo $location;?></label></strong><br>
<label style='float:left'>Date-in:</label><strong><label style='float:right;color:blue'><?php echo $datein;?></label></strong><br>
<label style='float:left'>Date-out:</label><strong><label style='float:right;color:blue'><?php echo $dateout;?></label></strong><br><hr>
<label style='float:left'>Customer ID:</label><strong><label style='float:right;color:blue'><?php echo $client_id;?></label></strong><br>
<label style='float:left'>Booking ID:</label><strong><label style='float:right;color:blue'><?php echo $booking_id;?></label></strong><br><hr>
<?php
//Hard coded!
//room type

//VAT
$vat = 0.14;
$TotalExVat;
//Formular for calculating vat
$TotalIncVat;
$roomType = $_GET['roomType'];
$roomsNum = intVal($_GET['numRoom']);
$nights  = intVal($_GET['nights']);
$numAdults = intVal($_GET['numAdults']);
$numChildren = intVal($_GET['numChildren']);
if($roomType =='Family'){
	//room type
	$amount = 1500;
	$TotalExVat = ($amount * $nights) * $roomsNum;
	$vatAmount = $TotalExVat * $vat;
	$TotalIncVat = $TotalExVat + $vatAmount;
}elseif($roomType =='Superior'){
	//room type
	$amount = 600;
	$TotalExVat = ($amount * $nights) * $roomsNum;
	$vatAmount = $TotalExVat * $vat;
	$TotalIncVat = $TotalExVat + $vatAmount;
}elseif($roomType =='Premier'){
	//room type
	$amount = 3650;
	$TotalExVat = ($amount * $nights) * $roomsNum;
	$vatAmount = $TotalExVat * $vat;
	$TotalIncVat = $TotalExVat + $vatAmount;
}elseif($roomType =='Standard'){
	//room type
	$amount = 420;
	$TotalExVat = ($amount * $nights) * $roomsNum;
	$vatAmount = $TotalExVat * $vat;
	$TotalIncVat = $TotalExVat + $vatAmount;
}elseif($roomType =='Junior'){
	//room type
	$amount = 350;
	$TotalExVat = ($amount * $nights) * $roomsNum;
	$vatAmount = $TotalExVat * $vat;
	$TotalIncVat = $TotalExVat + $vatAmount;
}

?>
<label style='float:left'>Amount(Ex VAT):</label><strong><label style='float:right;color:blue'>R <?php echo $TotalExVat;?></label></strong><br>
<label style='float:left'>VAT:</label><strong><label style='float:right;color:blue'> @ 14%</label></strong><br>
<label style='float:left'>VAT Amount:</label><strong><label style='float:right;color:blue'>R <?php echo  $vatAmount; ?></label></strong><br>
<label style='float:left'>Total Amount:</label><strong><label style='float:right;color:blue'>R <?php echo $TotalIncVat;?></label></strong><br><hr>
<label style='color:green;'>Confirm your booking by clicking the confirm buttton bellow:</label><br><br></div>
<p><input type='button' value='Print Data' onclick="PrintDoc();"/>
<input type='button' value='Print Preview' onclick="PrintPreview();"/></p>
<input  value='Confirm' type='Submit' name='confirm'></input>-</input><input  value='Cancel' type='Submit' name='cancel'></input>
</form>


<?php
@$confirm = $_POST['confirm'];
@$cancel = $_POST['cancel'];

	$username = $_GET['username'];
	$contact = $_GET['contact'];
	$nights  = $_GET['nights'];
	$roomsNum = $_GET['numRoom'];
	$roomType = $_GET['roomType'];
	$numAdults = $_GET['numAdults'];
	$numChildren = $_GET['numChildren'];
	$location = $_GET['location'];
	$datein = $_GET['datein'];
	$dateout = $_GET['dateout'];
	$booking_id = $_GET['booking_id'];
	$client_id = $_GET['client_id'];
if(isset($confirm)){
	$query = "INSERT INTO bookings VALUES('$booking_id','$client_id','$username','$contact','$location','$nights','$numAdults','$numChildren','$roomType','$datein','$dateout','$TotalIncVat','Pending')";
	$result = mysql_query($query)or die(mysql_error());
	if($result){
	echo "<script type='text/JavaScript'>alert('Thanks for the booking, your booking will be reviewed soon.');</script>";
	echo "<script type='text/JavaScript'>window.location='client.php?client_id=$client_id&contact=$contact&username=$username'</script>";
	}
}elseif($cancel){
	echo "<script type='Text/JavaScript'>window.location = 'make_booking.php?client_id=$client_id&contact=$contact&username=$username'</script>";
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