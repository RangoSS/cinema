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
<fieldset style='width:500px;height:450px;margin:auto;background-color:white'>
<center><h2 style='image:url('images/1.jpg');text-decoration:underline'>Room Rates </h2><hr>
<label style='color:green'>These are prices of rooms per night.</label></center><hr><br>
<div style='text-align:left;width:350px;margin-left:auto;'>
<form method='POST'>
<div style='width:200px;image:url('images/1.jpg')'>
<label style='float:left;'>Junior Suite:</label><label style='float:right;'>R 350/night</label><br><hr>
<label style='float:left;'>Standard Suite:</label><label style='float:right;'>R 420/night</label><br><hr>
<label style='float:left;'>Superior Suite:</label><label style='float:right;'>R 600/night</label><br><hr>
<label style='float:left;'>Family Suite:</label><label style='float:right;'>R 1,500/night</label><br><hr>
<label style='float:left;'>Premier Suite:</label><label style='float:right;'>R 3,650/night</label><br>
</div>
</form>

</div><hr><center>
<label style='color:green'>Please note that prices are subject to change.</label></center><hr><br>

<center>
<form method='POST'>
<input type='submit' name='return' value='return to home page'></input>
</form>
<?php
$return = $_POST['return'];
if(isset($return)){
	echo "<script type='text/JavaScript'>window.location='Home.php';</script>";
}
?>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>