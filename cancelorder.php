<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<?php

if(isset($_POST['Submit'])) {
	$sql = mysqli_query($conn,
	"SELECT * FROM admin WHERE password='"
	. $_POST["pwd"] . "' ");
	$num = mysqli_num_rows($sql);
	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("location:cart.php");
        
		exit();
	}
}

?>

<html>
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
	background-size: cover;	
}
.loginbox{
	width:320px;
	height:420px;
	background: #000;
	color: #fff;
	top:58%;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing:border-box;
	opacity: 100%;
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
	paddding:0;
	font-weight:bold;
}
.loginbox input{
	width:100%;
	margin-bottom: 20px; 
}
.loginbox input[type="text"], input[type="password"]
{
	border:none;
	border-bottom: 1px solid #fff;
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
	cursor: pointer;
	background: grey;
	color: #000;
}
.loginbox a{
	text-decoration:none;
	font-size:12px;
	line-height:20px;
	color:darkgrey;
}
.loginbox a:hover{
	color: red;
}
</style>
</head>


<body>
<title>manager pin</title>
</head>

<body>
<div class="loginbox">
<img src="k.PNG" class="avatar">

<h2>manager pin</h2>


<form method="post" action="cancelorder.php">	

<p>Manger pin</p>
<input type="password" id="pwd" name="pwd" maxlength="20" placeholder="Enter Manger pin" required=""><br>
<input type="submit"   id="Submit"  name="Submit"><br>


</form>
</div>
</body>

</html>