<?php include('connect.php');?>
<html>
<head>
<style type='text/css'>#head{background-image:url('images/1.jpg');width:800px;height:150px;margin:auto;}
#head{background-image:url('images/download1.jpg');width:990px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download1.jpg');width:800px;height:500px;margin:auto;}
#footer{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;}
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
<div id='body'><br><br><br><br>
<div style='background-color:white;width:450px;height:200px;margin:auto;border-radius:5px;'>
<br><br><br>
<form method='POST'><center>
<label style='color:blue;'>Are you sure you want to remove this bookings</label>
<hr>
<input type='submit' name='confirm' value='Confirm '></input> - <input type='submit' value='Cancel' name='cancel'></input>


</form>
<?php
$client_id = $_GET['client_id'];
$booking_id = $_GET['booking_id'];
		$username = $_GET['username'];
		$contact = $_GET['contact'];
		$query = "SELECT * FROM clients WHERE client_id = '$client_id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$uname = $row['name'];
		$mobile = $row['mobile'];
		
		@$cancel = $_POST['cancel'];
		@$confirm = $_POST['confirm'];
		if(isset($confirm)){
			
			$query = "DELETE FROM bookings WHERE booking_id ='$booking_id'";
			$result = mysql_query($query)or die(mysql_error());
			if($result){
				echo "<script type='text/javascript'>alert('Booking successfully removed from database.');window.location = 'view_booking_list.php?client_id=$client_id&contact=$contact&username=$username'</script>";
				
			}
		}
		elseif(isset($cancel)){
			echo "<script type='Text/JavaScript'>window.location = 'view_booking_list.php?client_id=$client_id&contact=$contact&username=$username'</script>";
		}
		?>
</div>

</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>

</body>
</html>