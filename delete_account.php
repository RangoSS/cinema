<html>
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
<div style='border:solid thin silver;padding-bottom:30px;width:490px;height:auto;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br>
<form method='POST'>
<label style='color:green;'>Are you sure you want to remove your account from our database?Your account with all your details will be removed</label>
<hr>
<label style='color:green;'>Please let us know why you leaving befor you delete your account:</label><hr><br>

<label style='color:blue;float:left'>Poor online service offered...</label><div style='color:green;float:right;'><input type='radio' name='reason'></input></div><br><hr>
<label style='color:blue;float:left'>Not interested in our hotels anymore...</label><div style='color:green;float:right;'><input type='radio' name='reason'></input></div><br><hr>
<label style='color:blue;float:left'>Prices too high...</label><div style='color:green;float:right;'><input type='radio' name='reason'></input></div><br><hr>
<label style='color:blue;float:left'>No valid reason...</label><div style='color:green;float:right;'><input type='radio' name='reason'></input></div><br><hr>

<label style='color:green;'>We are really sad that you leaving us, hope you will consider coming back in future.</label><hr><br>
<center><input type='submit' value='Remove' name='remove'></input> - <input type='submit' value='Cancel' name='cancel'></input>
<form>
<?php
$client_id = $_GET['client_id'];
@$remove = $_POST['remove'];
@$cancel = $_POST['cancel'];
if(isset($remove)){
		$query = "DELETE FROM clients WHERE client_id='$client_id'";
		$result = mysql_query($query)or die(mysql_error());
		
		$query = "DELETE FROM bookings WHERE client_id='$client_id'";
		$result = mysql_query($query)or die(mysql_error());
		if($result){
			
			echo "<script type='text/JavaScript'>alert('Note:Your account has been permanently removed from our database ');window.location = 'choose_logins.php';</script>";
		}
		
}elseif($cancel){
	echo "<script type='Text/JavaScript'>window.location = 'client.php?client_id=$client_id&contact=$mobile&username=$username';</script>";
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