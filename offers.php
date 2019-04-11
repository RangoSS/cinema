<html>
<head>
<?php include('connect.php');?>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:920px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:920px;height:auto;margin:auto;padding-bottom:20px;}
#footer{background-image:url('images/download1.jpg');width:920px;height:150px;margin:auto;}
a:hover{color:black;text-decoration:none;}
.offerLinks{display: inline-block;
    text-decoration: none;
    color: silver;
    font-weight:green;
    background-color: purple;
    padding: 15px 100px;
    font-size: 15px;
    border: 1px solid transparent;
	box-shadow: inset 4px 6px 8px rgba(222,255,255,.5);
	-webkit-transform: translate(0, 4px) rotateX(20deg);
	-moz-transform: translate(0, 4px);
	transform: translate(0, 4px);
	width:300px;
	height:10px;}
</style>
</head>
<body>
<div id="wrapper">
<div id='head'><br><br><br>
<div style='background-color:white;width:680px;height:30px;margin:auto;padding:5px;'><center>
<?php include('links.php'); ?>
</div>
</div>
<hr>
<div id='body'><br><br>
<fieldset style='width:650px;height:auto;margin:auto;background-color:white'>
<center><h2 style='image:url('images/1.jpg');text-decoration:underline'>Special Offers </h2>

<div style='text-align:left;width:350px;margin-left:auto;'>
<form method='POST'>
<div style='width:300px;image:url('images/1.jpg')'>

</div>
</form>

</div><hr><center>
<label style='color:green'>This weeks special offers.</label></center><hr><br>
<?php 

$query = "SELECT * FROM special_offer";
$result = mysql_query($query);
while($rows = mysql_fetch_array($result)){
	 $title = $rows['title'];
	 $enddate = $rows['end_date'];
	 $deal_id = $rows['offer_id'];
	echo "<a href=view_deal.php?offer_id=$deal_id class='offerLinks'>$title - Exp: $enddate</a><br><br>";
}
?>
<hr>
<form method='POST'>
<input type='submit' name='return' value='return to home page'></input>
</form>
<?php
@$return = $_POST['return'];
if(isset($return)){
	echo "<script type='text/JavaScript'>window.location='Home.php';</script>";
}
?>
</div>
</div>
</fieldset>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>