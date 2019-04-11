	<html>
<head>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:580px;margin:auto;}
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
<fieldset style='width:500px;height:350px;margin:auto;background-color:white'>
<center><h2 style='image:url('images/1.jpg');text-decoration:underline'>Pretoria Hotels</h2><hr>
<label style='color:green'>Click on location to view hotel details and rooms available</label></center><hr><br>
<div style='text-align:left;width:100px;font-size:15px;margin-left:70px;float:left;'>

<a href='hotel_details.php?id=Arcadia' title=''>Acardia</a><br><br>
<a href='hotel_details.php?id=Sunnyside' title=''>Sunnyside</a><br><br>
<a href='hotel_details.php?id=Centurion' title=''>Centurion</a><br><br>
<a href='hotel_details.php?id=Garsfontein' title=''>Garsfontein</a><br><br>
<a href='hotel_details.php?id=Menlyn' title=''>Menlyn</a>
</div>
<div style='text-align:left;width:150px;font-size:15px;margin-right:50px;float:right'>
<a href='hotel_details.php?id=Mamelodi' title=''>Mamelodi</a><br><br>
<a href='hotel_details.php?id=Pretoria_Noord' title=''>Pretoria Noord</a><br><br>
<a href='hotel_details.php?id=Eastlyn' title=''>Eastlyn</a><br><br>
<a href='hotel_details.php?id=Soshanguve' title=''>Soshanguve</a><br><br>
<a href='hotel_details.php?id=Marabastard' title=''>Marabastard</a>


</fieldset><br>
<fieldset style='width:500px;height:80px;margin:auto;background-color:white'>
<center><br>
<form method='POST'>
<input type='submit' name='return' value='return to home page'></input>
</form>
<?php
@$return = $_POST['return'];
if(isset($return)){
	echo "<script type='text/JavaScript'>window.location = 'Home.php'</script>";
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