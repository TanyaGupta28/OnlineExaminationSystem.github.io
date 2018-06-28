<html>
<head>
<style>
body
{
	background-image: url("CiOH1x3.jpg");
	background-size: 100%;
    padding-top: 20px;
}
div.xyz
{
	text-align : left;
	font-size : 20px;
	font-weight : bold;
	font-family : century schoolbook;
	color : black;
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
<table style="border: 3px solid black" align="center" bgcolor="red">
<tr>
<td  style="padding-right:40px;padding-left:40px;padding-top:20px;padding-bottom:20px">
<form action=" " method="post">
<div class="aks">Check your <img src ="dentisty-iq-logo.png" height="75px" width="75px"></img></div>
<br>
<div class="cha">mark the questions</div><br>
<div class="xyz">Question.1 What is half of the sqare root of 144?</div><br>
<div class="xyz" style="padding-left:120px">a. <input type="radio" name="r1" value="144">144 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. <input type="radio" name="r1" value="24">24</div>
<div class="xyz" style="padding-left:120px">c. <input type="radio" name="r1" value="6">6 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d. <input type="radio" name="r1" value="12">12</div>
<br>
<br>
<div class="xyz">Question.2 What comes next in the series 1,4,9,16,25 ?</div><br>
<div class="xyz" style="padding-left:120px">a. <input type="radio" name="r2" value="36">36 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. <input type="radio" name="r2" value="51">51</div>
<div class="xyz" style="padding-left:120px">c. <input type="radio" name="r2" value="35">35 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d. <input type="radio" name="r2" value="49">49</div>
<br>
<br>
<div class="xyz">Question.3 What is half of one-tenth of one half of 600?</div><br>
<div class="xyz" style="padding-left:120px">a. <input type="radio" name="r3" value="30">30 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  b. <input type="radio" name="r3" value="60">60</div>
<div class="xyz" style="padding-left:120px">c. <input type="radio" name="r3" value="15">15 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d. <input type="radio" name="r3" value="20">20</div>
<br>
<br>
<div class="xyz">Question.4 If you unscramble the letters in 'icnha' you get the name of a:</div><br>
<div class="xyz" style="padding-left:120px">a. <input type="radio" name="r4" value="State">State &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. <input type="radio" name="r4" value="Country">Country</div>
<div class="xyz" style="padding-left:120px">c. <input type="radio" name="r4" value="City">City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d. <input type="radio" name="r4" value="Animal">Animal</div>
<br>
<br>
<div class="xyz">Question.5 Cat is to Dog as Peach is to.</div><br>
<div class="xyz" style="padding-left:120px">a. <input type="radio" name="r5" value="Juice">Juice &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. <input type="radio" name="r5" value="Banana">Banana</div>
<div class="xyz" style="padding-left:120px">c. <input type="radio" name="r5" value="House">House&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d. <input type="radio" name="r5" value="Beer">Beer</div>
<br>
<br>
<div class="xyz" style="padding-left:250px"><input type="submit" name="answer" value="Submit Answer" style="height:50px;font-size:18pt;width:300px;text-align:center;background-color:black;color:white;font-family : lucida handwriting"></div>
<br><br><div class="xyz" style="padding-left:100px">
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("project") or die("please check database");
if(isset($_POST["answer"]))
{
	session_start();
	$email = $_SESSION['email'];
	$r1 = $_POST["r1"];
	$r2 = $_POST["r2"];
	$r3 = $_POST["r3"];
	$r4 = $_POST["r4"];
	$r5 = $_POST["r5"];
	$ins = mysql_query("update tester set q1 = '$r1', q2 = '$r2',q3= '$r3',q4 = '$r4',q5 = '$r5' where email = '$email'");
	if($ins)
{
	echo"YOUR ANSWERS HAVE BEEN RECORDER ! THANKYOU";
}
else
{
	echo"error in record..! sry";   //echo"mysql error" to show which error is occuring
}
}
?>
</td>
</tr>
</table>
<br><br>
<div class="cha"><a href="http://localhost/p1.php" style="color:black">Home</a></div>
</body>
</html>