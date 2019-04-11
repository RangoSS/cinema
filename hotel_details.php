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
<fieldset style='width:500px;height:500px;margin:auto;background-color:white'>
<center><h2 style='image:url('images/1.jpg');text-decoration:underline'>Hotel Details:</h2><hr>
<?php $hotel_id = $_GET['id'];

$query = "SELECT * FROM hotels WHERE location = '$hotel_id'";
$result = mysql_query($query);
$rows = mysql_fetch_array($result);
$location = $rows['location'];
$address = $rows['address'];
$telephone = $rows['telephone'];
$email = $rows['email'];
$rooms = $rows['rooms_available'];
 ?>

<label style='color:green'>Details for a hotel in <label style='image:url('images/1.jpg')'><?php echo $hotel_id;?></label></label></center><hr><br>
<div style='text-align:left;width:350px;margin-left:70px;'>
<div style='width:380px;image:url('images/1.jpg');'><hr>
<label style='float:left;color:black'>Location:</label><label style='float:right;'><?php echo $hotel_id;?></label><br><hr>
<label style='float:left;color:black'>Address:</label><label style='float:right;'><?php echo $address;?></label><br><hr>
<label style='float:left;color:black'>Telephone:</label><label style='float:right;'><?php echo $telephone;?></label><br><hr>
<label style='float:left;color:black'>Email:</label><label style='float:right;'><?php echo $email?></label><br><hr>
<label style='float:left;color:black'>Number of rooms currently available:</label><label style='float:right;'><?php echo  $rooms;?></label><br><hr>
</div>
<center><br>
<form method='POST'>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.7246753017134!2d28.208828000000004!3d-25.746617000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9561f42aa8cb85%3A0xa5d05d17bcc53593!2sArcadia!5e0!3m2!1sen!2sza!4v1433963193248" 
width="100%" height="100px" frameborder="0" style="border:0"></iframe><br></br>
<input type='submit' name='return' value='return to main menu'></input>
</form>
</fieldset>
<?php
 @$return = $_POST['return'];
if(isset($return)){
	echo "<script type='text/JavaScript'>window.location = 'hotel.php'</script>";
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