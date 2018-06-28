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
<div class="xyz"><input type="submit" name="log1" value="Show all records" style="height:50px;font-size:18pt;width:400px;text-align:center;background-color:black;color:white;font-family : lucida handwriting">
</DIV>
<br><br>
<table style="border: 3px solid black" align="center" width="100%">
<tr>
<th style="border: 3px solid black" align="center">FIRST NAME</th>
<th style="border: 3px solid black" align="center">LAST NAME</th>
<th style="border: 3px solid black" align="center">EMAIL</th>
<th style="border: 3px solid black" align="center">PASSWORD</th>
<th style="border: 3px solid black" align="center">PHONE</th>
<th style="border: 3px solid black" align="center">QUESTION 1</th>
<th style="border: 3px solid black" align="center">QUESTION 2</th>
<th style="border: 3px solid black" align="center">QUESTION 3</th>
<th style="border: 3px solid black" align="center">QUESTION 4</th>
<th style="border: 3px solid black" align="center">QUESTION 5</th>
</tr>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("project") or die("please check database");

if(isset($_POST["log1"]))
{
	$ins = mysql_query("select * from tester");
while($dt = mysql_fetch_array($ins))
{
?>

<tr>
<td style="border: 3px solid black" align="center"><?php echo $dt['first']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['last']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['email']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['password']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['phone']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['q1']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['q2']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['q3']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['q4']; ?></td>
<td style="border: 3px solid black" align="center"><?php echo $dt['q5']; ?></td>
</tr>

<?php }} ?>
</table>


</td>
</tr>
</table>

<div class="xy"><a href="http://localhost/p1.php" style="color:white">Home</a></div>

</body>
</html>