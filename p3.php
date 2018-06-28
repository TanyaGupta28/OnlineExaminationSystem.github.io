<html>
<head>
<style>
body
{
	background-image: url("history-ppt-background-29.gif");
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
	color : white;
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
	font-size : 50px;
	text-align : center;
	color : white;
}
</style>
</head>
<body>
<table style="border: 3px solid black" align="center" background = "lZiQPYS.jpg">
<tr>
<td style="padding-right:80px;padding-left:80px;padding-top:50px;padding-bottom:50px">
<form action=" " method="post">
<div class="aks">Check your <img src ="dentisty-iq-logo.png" height="75px" width="75px"></img></div>
<br>
<div class="cha">SIGN UP</div><br>
<div class="xyz"><input type="text" name="first" placeholder="-Enter First Name-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="text" name="last" placeholder="-Enter Last Name-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="text" name="email" placeholder="-Enter Email-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="password" name="pass" placeholder="-Enter password-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="text" name="phone" placeholder="-Enter Phone Number-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="submit" name="getit" value="SIGN UP" style="height:50px;font-size:18pt;width:300px;text-align:center;background-color:white;color:black;font-family : lucida handwriting"></div>
</td>
</tr>
</table>
<br>
<div class="xyz"><input type="submit" name="log" value="START TEST" style="height:50px;font-size:18pt;width:300px;text-align:center;background-color:white;color:black;font-family : lucida handwriting"><div class="cha" style="text-align : right"><a href="http://localhost/p1.php" style="color:white">Home</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="xyz" style = "font-size:10px; color:white">
<?php
if(isset($_POST["log"]))
{
	header("location:http://localhost/p2.php");
}
?>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("project") or die("please check database");
if(isset($_POST["getit"]))
{
	$first = $_POST["first"];
	$last = $_POST["last"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$phone = $_POST["phone"];
	$ins = mysql_query("insert into tester(first, last, email, password, phone)values('$first','$last','$email','$pass','$phone')");
	if($ins)
{
	echo"YOU HAVE BEEN SUCCESSFULLY REGISTERED, PLEASE CLICK ON START TEST TO CONTINUE";
}
else
{
	echo"error in record..! sry";   //echo"mysql error" to show which error is occuring
}
}
?>