<html>
<head>
<?php
include('connect.php');
?>
<style type='text/css'>#head{background-image:url('images/1.jpg');width:800px;height:150px;margin:auto;}
#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download1.jpg');width:800px;height:auto;margin:auto;padding-bottom:30px;}
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
<div style='border:solid thin silver;width:490px;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br><hr>

<?php
$client_id_get = $_GET['client_id'];
$query = "SELECT * FROM clients WHERE client_id ='$client_id_get'";
$results = mysql_query($query);
$rows = mysql_fetch_assoc($results);
	$client_name = $rows['name'];
	$client_surname = $rows['surname'];
	$client_id = $rows['client_id'];
	$mobile = $rows['mobile'];
	$nationality = $rows['nationality'];
	$email = $rows['email'];
	$gender= $rows['gender']; 	
	$dob = $rows['dob'];
	$idNumbr = $rows['id_number'];
	$address = $rows['address'];
	$occupation = $rows['occupation'];
	
?>
<label class='adminLinks'>Full details for: <?php echo $client_name." ".$client_surname;?></label><br><br><hr><center>

<div style='width:300px;background-color:white;padding-bottom:20px'><br>
<label style='float:left'>Client ID:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $client_id; ?></label><br><hr>
<label style='float:left'>Client Name:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $client_name; ?></label><br><hr>
<label style='float:left'>Client Surname:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $client_surname; ?></label><br><hr>
<label style='float:left'>Client ID Nr:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $idNumbr; ?></label><br><hr>
<label style='float:left'>Client Birthdate:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $dob; ?></label><br><hr>
<label style='float:left'>Client Nationality:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $nationality; ?></label><br><hr>
<label style='float:left'>Client Mobile:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $mobile; ?></label><br><hr>
<label style='float:left'>Client Email:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $email; ?></label><br><hr>
<label style='float:left'>Client Address:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $address; ?></label><br><hr>
<label style='float:left'>Client Occupation:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $occupation; ?></label><br><hr>
<label style='float:left'>Client Gender:</label><label style='float:right;color:purple;text-decoration:underline;'><?php echo $gender; ?></label><br><hr>

</div>
</div>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>

</body>
</html>