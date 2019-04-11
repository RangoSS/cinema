<html>
<head>
<?php
include('connect.php');
?>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:auto;margin:auto;padding-bottom:30px;}
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
    padding: 15px 100px;
    font-size: 18px;
    border: 1px solid transparent;
	box-shadow: inset 4px 6px 8px rgba(222,255,255,.5);
	-webkit-transform: translate(0, 4px) rotateX(20deg);
	-moz-transform: translate(0, 4px);
	transform: translate(0, 4px);
	width:190px;
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
<div style='border:solid thin silver;width:490px;margin:auto;padding:20px;border-radius:25px;background-color:white;text-align:center'><br><hr>

<form method='POST'>
<a href='admin_hotel_info.php?location_id=Arcadia' class='adminLinks'>Arcadia</a><br><br>
<a href='admin_hotel_info.php?location_id=Mamelodi' class='adminLinks'>Mamelodi</a><br><br>
<a href='admin_hotel_info.php?location_id=Sunnyside' class='adminLinks'>Sunnyside</a><br><br>
<a href='admin_hotel_info.php?location_id=Centurion' class='adminLinks'>Centurion</a><br><br>
<a href='admin_hotel_info.php?location_id=Menlyn' class='adminLinks'>Menlyn</a><br><br>
<a href='admin_hotel_info.php?location_id=Pretoria_noord' class='adminLinks'>Pretoria_noord</a><br><br>
<a href='admin_hotel_info.php?location_id=Eastlyn' class='adminLinks'>Eastlyn</a><br><br>
<a href='admin_hotel_info.php?location_id=Marabastard' class='adminLinks'>Marabastard</a><br><br>
<a href='admin_hotel_info.php?location_id=Soshanguve' class='adminLinks'>Soshanguve</a><br><br>
<a href='admin_hotel_info.php?location_id=Garsfontein' class='adminLinks'>Garsfontein</a><br><br>
<hr>
<input type='submit' name='back' value='Go back to main manu'></input>
</form>

<?php
@$back = $_POST['back'];
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