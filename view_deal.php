<html>
<head>
<?php include('connect.php');?>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:570px;margin:auto;}
#footer{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}
.offerLinks{display: inline-block;
    text-decoration: none;
    color: silver;
    font-weight:green;
    background-color: purple;
    padding: 15px 100px;
    font-size: 18px;
    border: 1px solid transparent;
	box-shadow: inset 4px 6px 8px rgba(222,255,255,.5);
	-webkit-transform: translate(0, 4px) rotateX(20deg);
	-moz-transform: translate(0, 4px);
	transform: translate(0, 4px);
	width:260px;
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
<div id='body'><br><br>
<fieldset style='width:500px;height:490px;margin:auto;background-color:white'>
<center><h2 style='image:url('images/1.jpg');text-decoration:underline'>Special Offers </h2>

<div style='text-align:left;width:350px;margin-left:auto;'>
<form method='POST'>
<div style='width:200px;image:url('images/1.jpg')'>

</div>
</form>

</div><hr><center>
<label style='color:green'>This weeks special offers.</label></center><hr><br>
<?php 
$offer_id = $_GET['offer_id'];
$query = "SELECT * FROM special_offer  WHERE offer_id = '$offer_id'";
$result = mysql_query($query);
	 $rows = mysql_fetch_array($result);
	 $title = $rows['title'];
	 $startdate = $rows['start_date'];
	 $enddate = $rows['end_date'];
	 $deal_id = $rows['offer_id'];
	$message =  $rows['message'];
?>
<label style='color:green'>Special Offer title: <?php echo $title; ?></label></center><hr><br><center><div style='width:420px'>
<label style='float:left'>Offer start date: <label style='color:red'><?php echo $startdate;?></label> &nbsp   &nbsp   &nbsp Offer Expiry date: <label style='color:red'><?php echo $enddate;?></label></label><br>
<hr>
<fieldset style='background-color:yellow;width:300px;height:150px;padding:30px;text-align:left'>
<?php echo $message;?>
</div><br>
<a href='offers.php'>Return to manu</a>
</fieldset>

</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>