<!DOCTYPE html>
<html>
<?php include "homeheader.php"?>
<?php
error_reporting(E_ERROR | E_PARSE);//remove warning msg
include "connect.php";
//user login
if(isset($_POST['login'])) {

	$sql = mysqli_query($conn,"SELECT * FROM registeration WHERE Email='". $_POST["username"] . "' AND password='" . $_POST["pwd"] . "' ");
	$num = mysqli_num_rows($sql);
	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("location:Beef.php");
		exit();
	}
}
//admin login 
if(isset($_POST['login'])){
	$sql = mysqli_query($conn,"SELECT * FROM admin WHERE Email='". $_POST["username"] . "' AND password='" . $_POST["pwd"] . "' ");
	$num = mysqli_num_rows($sql);
	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("location:Admin.php");
		exit();
	}

}

//cashier login 
if(isset($_POST['login'])) {
	$sql = mysqli_query($conn,"SELECT * FROM cashier WHERE Email='". $_POST["username"] . "' AND password='" . $_POST["pwd"] . "' ");
	$num = mysqli_num_rows($sql);
	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("location:cashiercart.php");
		exit();
	}
}
//quality control login
if(isset($_POST['login'])) {

	$sql = mysqli_query($conn,"SELECT * FROM qualitycontrol WHERE Email='". $_POST["username"] . "' AND password='" . $_POST["pwd"] . "' ");
	$num = mysqli_num_rows($sql);
	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("location:QCHomePage.php");
		exit();
	}
}

?>
<head>
<style>

form{
	text-align: center;
}
h2{
	margin:0;
	padding: 0 0 20px;
	font-size: 22px;	
	text-align: center;
}
h3{
	font-size: 15px;	
	text-align: center;
}
body{
	margin:0;
	padding:0;
	background-image: url("imgg.JPG");
	/* fit background */
	background-size: cover;	
}
.loginbox{
	width:320px;
	height:420px;
	background: #000;
	color: #fff;
	top:58%;
	left:50%;
	position: fixed;
	transform: translate(-50%,-50%);
	box-sizing:border-box;
	padding: 70px 30px;
}
.avatar{
	width:100px;
	height:100px;
	border-radius:50%;
	position: fixed;
	top: -50px;
	left:110px;
}
.loginbox p{
	margin:0;
	font-weight:bold;
}
.loginbox input{
	width:100%;
	margin-bottom: 20px; 
}
.loginbox input[type="text"], input[type="password"]
{
	border:none;
	border-bottom: 1px solid #fff; /*line*/
	background: transparent;
	outline: none;
	height:40 px;
	color:white;
	font-size: 16px;
}
.loginbox input[type="submit"]{
	border:none;
	outline: none;
	height:40px;
	background:red;
	color: white;
	font-size:18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover{
	cursor: pointer; /*hand dah */
	background: grey;
	color: #000;
}

.loginbox a:hover{
	color: red;
}
</style>
<title>Login</title>
</head>

<body>
<div class="loginbox">
<img src="k.PNG" class="avatar">

<h2>Sign In</h2>


<form method="post" action="projectlogin.php">	

<p>Email</p>
<input type="text" id="username" name="username" maxlength="30" placeholder="Enter Email" required=""><br>

<p>Password</p>
<input type="password" id="pwd" name="pwd" maxlength="20" placeholder="Enter passowrd" required=""><br>
<input type="submit"   id="login"  name="login"><br>

<a href="registeration.php">Don't have an account?</a>
</form>
</div>
</body>

</html>