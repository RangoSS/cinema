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

<div id="wrapper">

<div id='head'><br><br><br>
<div style='background-color:white;width:500px;height:30px;margin:auto;padding:5px;'><center>
<?php include('links.php'); ?>
</div>
</div>
<hr>
<div id='body'><br><br><br>
<div style='border:solid thin silver;width:490px;margin:auto;padding:20px;border-radius:5px;background-color:white;text-align:center'><br><hr>
<label class='adminLinks'>Currently registered clients:</label><br><br><hr><center>
<table border='1'>
<tr>
<th>Client ID</th><th>Client Name</th><th>Client Surname</th><th>View more details</th>
</tr>
<?php
$query = "SELECT * FROM clients";
$results = mysql_query($query);
while($rows = mysql_fetch_assoc($results)){
	$client_name = $rows['name'];
	$client_surname = $rows['surname'];
	$client_id = $rows['client_id'];
	

echo "<tr>";
echo "<td>$client_id</td><td>$client_name</td><td>$client_surname</td><td><a href='more_client_details.php?client_id=$client_id'>More...</a></td>";
echo "</tr>";
}
?>
</table><hr>
<form method='POST'>
<input type='submit' name='back' value='Go back to main manu'></input>
</form><hr>
<br>
<?php
$back = $_POST['back'];
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