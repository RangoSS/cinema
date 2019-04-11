<?php
session_start();
include('connect.php');
if($_SESSION['client_nr'] ==false){
	header("Location:login.php?login_id=client");
}
?>

<html>
<head>

<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:600px;margin:auto;}
#footer{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}
a.adminLinks:hover{color:white;text-decoration:underline}
.button-link{padding:10px 15px;background-color:#4479BA;color:#FFF;text-decoration:none;width:20px;}
.button-link:hover{background-color:#356094;color:yellow;text-decoration:underline}
.adminLinks{display: inline-block;
    text-decoration: none;
    color: silver;
    font-weight:green;
    background-color: green;
    padding: 15px 50px;
    font-size: 18px;
    border: 1px solid transparent;
	box-shadow: inset 4px 6px 8px rgba(222,255,255,.5);
	-webkit-transform: translate(0, 4px) rotateX(20deg);
	-moz-transform: translate(0, 4px);
	transform: translate(0, 4px);
	width:380px;
	height:10px;}
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
<?php
$client_id = $_GET['client_id'];
$client_id = $_GET['client_id'];
		$username = $_GET['username'];
		$contact = $_GET['contact'];
?>
<div style='border:solid thin silver;width:490px;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br>
<a href='login.php?action=off'>Logout</a>

<hr>
<a href='make_booking.php?client_id=<?php echo $client_id;?>&username=<?php echo $username;?>&contact=<?php echo $contact;?>' class='adminLinks'>Make booking</a><br><br>
<a href='view_booking_list.php?client_id=<?php echo $client_id;?>&username=<?php echo $username;?>&contact=<?php echo $contact;?>' class='adminLinks'>View Booking Status</a><br><br>
<a href='edit_account_details_client.php?client_id=<?php echo $client_id;?>&username=<?php echo $username;?>&contact=<?php echo $contact;?>' class='adminLinks'>View and Edit Account details</a><br><br>
<a href='delete_account.php?client_id=<?php echo $client_id;?>&username=<?php echo $username;?>&contact=<?php echo $contact;?>' class='adminLinks'>Remove your Morning Star Hotel Account</a><br><br>

</div>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>