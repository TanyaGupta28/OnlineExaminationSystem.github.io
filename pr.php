<html>
<head>
<style>
body
{
	background-image: url("LQKxcbv.png");
	background-size: 100%;
    padding-top: 20px;
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
	text-align : center;
	font-size : 40px;
	font-weight : bold;
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
<table style="border: 3px solid black" align="center" bgcolor="#E6001A">
<tr>
<td style="padding-right:80px;padding-left:80px;padding-top:20px;padding-bottom:50px">
<form action=" " method="post">
<div class="aks">Check your <img src ="dentisty-iq-logo.png" height="75px" width="75px"></img></div>
<br>
<div class="cha">result</div><br>
<div class="xyz"><input type="text" name="email" placeholder="-Registered Email ID-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div>
<br>
<div class="xyz"><input type="password" name="pass" placeholder="-Password-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>
<div class="xyz"><input type="submit" name="log" value="Log In" style="height:50px;font-size:18pt;width:300px;text-align:center;background-color:black;color:white;font-family : lucida handwriting"></div>


<center><b><a href="http://localhost/frgt.php" style="color:black">-Forget Password ? (click here to continue)-</a>
<br>
<br>

<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("project") or die("please check database");
if(isset($_POST["log"]))
{
	static $c = 0;
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$ins = mysql_query("select q1, q2, q3, q4, q5 from tester where email ='$email' and password = '$pass'");
	$ar =  mysql_fetch_array($ins);
	if($ar['q1']=='6')
	{
		$c++;
	}
	if($ar['q2']=='36')
	{
		$c++;
	}
	if($ar['q3']=='15')
	{
		$c++;
	}
	if($ar['q4']=='Co')
	{
		$c++;
	}
	if($ar['q5']=='Ba')
	{
		$c++;
	}
	echo "Out of 5 Questions your $c questions are correct";
	
}
?>
</td>
</tr>
</table>
<div class="xy"><a href="http://localhost/p1.php" style="color:black">Home</a></div>
</body>
</html>
