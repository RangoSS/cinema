<html>
<head>
<?php include('connect.php'); ?>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:660px;margin:auto;}
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
<center>
<form method='POST'>
<fieldset style='border:solid thin silver;width:400px;height:auto;padding:30px;'>
<label style='color:green;'>Please add a title and the message of the post bellow:</label>
<hr>
<label style='float:left'>Title:</label><br><label style='float:left'><input name='title' type='text'></input></label><br><br><hr><br>
<label style='float:left'>Offer start date:<br><input type='text' name='start'></input></label><label style='float:right'>Expiry date:<br><input name='end' type='text'></input></label><br><br><br><hr>
<label style='float:left'>Special offer:</label><br><label style='float:left'><textarea name='message' cols='50' rows='15'></textarea>
<hr>
<center><input type='submit' value='Post' name='post'></input> - <input type='submit' value='abort' name='abort'></input></center>
</fieldset>
</form>
<?php

@$title = $_POST['title'];
@$message = $_POST['message'];
$offer_id = "78-OFR-".rand(001111,9999992).date('mY');
@$startdate = $_POST['start'];
@$enddate = $_POST['end'];

//onclick buttons

@$post = $_POST['post'];
@$abort = $_POST['abort'];

if(isset($post)){
	if($title !='' AND $message !='' AND $startdate  != '' AND $enddate !=''){
		$query = "INSERT INTO special_offer VALUES('$offer_id','$title','$message','$startdate','$enddate')";
		$result = mysql_query($query);
		if($result){
			echo "<script type='Text/JavaScript'>alert('Offer added to the database!!');window.location = 'admin.php'</script>";
		}
	}else{
		echo "<script type='Text/JavaScript'>alert('Note:please enter all required data!!');</script>";
	}
}elseif(isset($abort)){
	echo "<script type='Text/JavaScript'>window.location = 'admin.php'</script>";
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