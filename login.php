<?php
session_start();
 include('connect.php');
 @$action = $_GET['action'];
 if($action =='off'){
	unset($_SESSION['client_nr']);
	unset($_SESSION['admin_nr']);
 }
 ?>
<html>
<head>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:500px;margin:auto;}
#footer{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;}
a:hover{color:green;text-decoration:none;}

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
<div id='body'>
<br><br><br>
<div style='color:yellow;'>
<fieldset style='width:590px;height:290px;margin:auto;image:url(\'images/1.jpg\');background-color:;'>
<br><br><center>
<form method='POST'>
Username:<br><input  type='text' name='username'></input><br><br>
Password:<br><input type='password' name='password'></input><br><br><hr>
<br>
<center><input type='submit' name='login' value='login'></input>  | <input type='submit' name='cancel' value='Cancel'></input>

 
</form><br><br>
<label style='color:red'>Don't have an account register </label><a href='client_register.php' style='color:blue'>here</a>
</fieldset>

</div>
<?php
@$login = $_POST['login'];
@$cancel = $_POST['cancel'];
@$username = Trim($_POST['username']);
@$password = Trim($_POST['password']);
@$login_type = $_GET['login_id'];
if(isset($login)){
		if($login_type =='client'){
			$query = "SELECT * FROM clients  WHERE name ='$username' and password='$password'";
			$result = mysql_query($query);
			$rows = mysql_fetch_array($result);
			$client_id = $rows['client_id'];
			$username = $rows['name'];
			$contact = $rows['mobile'];
			$count = mysql_num_rows($result)or die(mysql_error());
			if($count==1){
				$_SESSION['client_nr'] = $client_id;
				echo "<script type='Text/JavaScript'>window.location='client.php?client_id=$client_id&username=$username&contact=$contact';</script>";
			}
			else{
				echo "<script type='Text/JavaScript'>alert('Incorrect Username or Password');</script>";
			}
		}elseif($login_type == 'admin'){
			$query = "SELECT * FROM staff  WHERE staff_name ='$username' and password='$password'";
			$result = mysql_query($query);
			$rows = mysql_fetch_array($result);
			$admin_id = $rows['staff_id'];
			$count = mysql_num_rows($result)or die(mysql_error());
			if($count==1){
			$_SESSION['admin_nr'] = $admin_id;
				echo "<script type='Text/JavaScript'>window.location='admin.php';</script>";
			}
			else{
				echo "<script type='Text/JavaScript'>alert('Incorrect Username or Password');</script>";
			}
		}
	}
elseif($cancel){
	echo "<script type='text/JavaScript'>window.location='choose_login.php'</script>";
}

?>
<br>

</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>