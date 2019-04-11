<?php include('connect.php'); ?>
<html>
<head>
<style type='text/css'>
#Wrapper{background-image:url('images/downl.jpg');}

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
<center><h2 style='image:url('images/download2.jpg');text-decoration:underline'>Room booking(Quotation)</h2><hr>
<label style='color:green'>Please check the availability of rooms before making a booking</label></center><hr><br>
<div style='text-align:left;width:350px;margin-left:auto;'>
<form method='POST'>
<div style='width:300px;image:url('images/download2.jpg');margin-left:-40px;'>
<label style='float:left;'>Customer_name</label><label style='float:right;'><input type='text' name='name'></input></label><br><hr>
<label style='float:left;'>Contact Number</label><label style='float:right;'><input type='text' name='contact'></input></label><br><hr>
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
<label style='float:left;'>Date:</label><label style='float:right;'><input type='Date' name='date'></input></label><br><br><hr>&nbsp &nbsp &nbsp
<input type='submit' name='book' Value='&nbsp Next &nbsp'></input>&nbsp &nbsp &nbsp <input type='submit' name='cancel' Value='Cancel'></input><hr>

</div>
</form>
<?php
	@$customer_name = $_POST['name'];
	@$contact = $_POST['contact'];
	@$nights  = $_POST['nights'];
	@$roomsNum = $_POST['rooms'];
	@$roomType = $_POST['roomType'];
	@$numAdults = $_POST['numAdults'];
	@$numChildren = $_POST['numChildren'];
	@$location = $_POST['location'];
	@$date = $_POST['date'];
	@$booking_id = Substr($customer_name,0,2).rand(22222,999999).Substr($roomType,0,3).date('Y');
	@$customer_id = "Cust".rand(00000,999999).'-'.Substr($location,0,3);
	//Buttons
	@$book = $_POST['book'];
	@$cancel = $_POST['cancel'];																
if(isset($book)){
	if($customer_name !='' AND $contact !='' AND $date !=''){
		if($roomType !='--Select room type--'){
			echo "<script type='text/JavaScript'>window.location = 'confirm_booking.php?customer_id=$customer_id&booking_id=$booking_id&customer_name=$customer_name&contact=$contact&nights=$nights&numRoom=$roomsNum&roomType=$roomType&numAdults=$numAdults&numChildren=$numChildren&location=$location&date=$date'</script>";
		}else{
			echo "<script type='text/JavaScript'>alert('Note: Please select a room type before proceeding! ');</script>";
		}
	}else{
		echo "<script type='text/JavaScript'>alert('Note:You cannot proceed unless you enter all required data! ');</script>";
	}
}elseif($cancel){
	echo "<script type='text/JavaScript'>window.location = 'home.php'</script>";
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