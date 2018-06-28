<html>
<head>
<style>
body
{
	background-image: url("wo4AU6.jpg");
	background-size: 100%;
    padding-top: 80px;
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
	font-size : 20px;
}
div.xy
{
	font-family : stencil;
	text-align : right;
	font-size : 30px;
	font-weight : bold;
}
</style>
</head>
<body>
<table style="border: 3px solid black" align="center" bgcolor="grey">
<tr>
<td style="padding-right:80px;padding-left:80px;padding-top:50px;padding-bottom:50px">
<form action=" " method="post">
<div class="aks">Check your <img src ="dentisty-iq-logo.png" height="75px" width="75px"></img></div>
<br>
<div class="cha">TO retrieve your password enter the following details</div><br>
<div class="xyz"><input type="text" name="email" placeholder="-Registered Email ID-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div>
<br>
<div class="xyz"><input type="password" name="phone" placeholder="-Phone number linked with account-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="submit" name="getit" value="retrieve password" style="height:50px;font-size:18pt;width:300px;text-align:center;background-color:black;color:white;font-family : lucida handwriting"></div>
<br><br><div class="xyz" style="font-size:20px">
<?php	
$con = mysql_connect("localhost","root","");
mysql_select_db("project") or die("please check database");
if(isset($_POST["getit"]))
{
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$ins = mysql_query("select password from tester where email = '$email' and phone = '$phone'");
	$ar = mysql_fetch_array($ins);
	if($ar !=  null)
{
	echo $ar['password'];
}
else
{
	echo"you need to sign up first";   //echo"mysql error" to show which error is occuring
}
}
?>
</td>
</tr>
</table>
<br><br>
<div class="xy"><a href="http://localhost/p1.php" style="color:white">Home</a></div>


</body>
</html>