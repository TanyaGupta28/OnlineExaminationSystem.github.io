<html>
<head>
<style>
body
{
	background-image: url("6797158-green-abstract.jpg");
	background-size: 100%;
    padding-top: 50px;
}
div.xyz
{
	text-align : center;
	font-size : 50px;
	font-weight : bold;
	font-family : century schoolbook;
	color : white;
}
div.aks
{
	text-align : center;
	font-size : 70px;
	font-weight : bold;
	font-family : lucida handwriting;
}
div.abc
{
	border-radius:100%;
	width: 200px;
	height: 300px;
}
div.cha
{
	font-family : stencil;
	text-align : right;
	font-size : 30px;
}
</style>
</head>
<body>
<table style="border: 3px solid black" align="center">
<tr>
<td style="padding-right:80px;padding-left:80px;padding-top:10px;padding-bottom:40px">
<form action=" " method="post">
<div class="aks">Check your <img src ="dentisty-iq-logo.png" height="75px" width="75px"></img></div>
<br>
<center><i><b>-To know your IQ/ To start test you need to log in-<br><br></i>
<div class="xyz"><input type="text" name="email" placeholder="-Registered Email ID-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div>
<br>
<div class="xyz"><input type="password" name="pass" placeholder="-Password-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="submit" name="log" value="Log In" style="height:50px;font-size:18pt;width:300px;text-align:center;background-color:black;color:white;font-family : lucida handwriting"></div>
<?php	
$con = mysql_connect("localhost","root","");
mysql_select_db("project") or die("please check database");
if(isset($_POST["log"]))
{
	$email = $_POST["email"];
	//$_SESSION['email']= $email;
	$pass = $_POST["pass"];
	$ins = mysql_query("select * from tester where email = '$email' and password = '$pass'");
	if(mysql_fetch_array($ins) !== false)
{
	session_start();
	$_SESSION['email']= $email;
	header("location:http://localhost/ques.php");
}
else
{
	echo"you need to sign up first";   //echo"mysql error" to show which error is occuring
}
}
?>

<center><b><a href="http://localhost/frgt.php" style="color:black">-Forget Password ? (click here to continue)-</a>
<br><br>
<div class="xyz"><input type="submit" name="sign" value="Sign Up" style="height:50px;font-size:18pt;width:300px;text-align:center;background-color:black;color:white;font-family : lucida handwriting"></div>
<?php
if(isset($_POST["sign"]))
{
	header("location:http://localhost/p3.php");
}
?>
<center><i><b>-Not a new user ? (click to register yourself)-</i></b>
</td>
</tr>
</table>
<br><br>
<div class="cha"><a href="http://localhost/p1.php" style="color:black">Home</a></div>



</body>
</html>