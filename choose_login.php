<html>
<head>
<?php include('connect.php');?>
<style type='text/css'>
#Wrapper{background-image:url('images/1.jpg');}

#head{background-image:url('images/download1.jpg');width:800px;height:150px;margin:auto;border-radius:20px;}
#body{background-image:url('images/download10.jpg');width:800px;height:auto;margin:auto;padding-bottom:50px;}
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
.login{
display: inline-block;
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
<fieldset style='width:500px;height:auto;margin:auto;background-color:white;padding-bottom:50px;'>
<br>
<hr>
<center>

<div style='text-align:left;width:350px;margin-left:auto;'>

<form method='POST'>

<div style='width:200px;image:url('images/1.jpg')'>

<label>Please choose user type:</label>
</div>

</div><hr><center>
<br><br>
<a href='login.php?login_id=client' class='login'>Client</a> - <a href='login.php?login_id=admin' class='login'>Admin</a>
</div>
<hr>
<div id='footer'>

<?php include('footerLinks.php');?>

</div>
</div>
</body>
</html>