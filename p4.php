<html>
<head>
<style>
body
{
	background-image: url("69385896-black-abstract-wallpapers.jpg");
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
	text-align : center;
	font-size : 70px;
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
<table style="border: 3px solid black" align="center" bgcolor="grey">
<tr>
<td style="padding-right:70px;padding-left:70px;padding-top:40px;padding-bottom:10px">
<form action=" " method="post">
<div class="aks">Check your <img src ="dentisty-iq-logo.png" height="75px" width="75px"></img></div>
<br>
<div class="cha">administrator block</div>
<div class="xyz"><input type="text" name="name" placeholder="-Employee ID-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div>
<br>
<div class="xyz"><input type="password" name="pass1" placeholder="-Password-" style="height:50px;font-size:14pt;width:400px;text-align:center; opacity: 0.6; filter:alpha(opacity=60);"></div><br>

<div class="xyz"><input type="submit" name="log" value="Log In" style="height:50px;font-size:18pt;width:200px;text-align:center;background-color:black;color:white;font-family : lucida handwriting"></div>
<br><br>
</td>
</tr>
</table>
<div class="xy"><a href="http://localhost/p1.php" style="color:white">Home</a></div>
</body>
</html>
<?php
if(isset($_POST['log']))
{
	$name = $_POST['name'];
	$pass1 = $_POST['pass1'];
	if($name=='agramon'&&$pass1=='agramon')
	{
		header("location:http://localhost/admin.php");
	}
	else
	{
		echo"invalid entry";
	}
}
?>