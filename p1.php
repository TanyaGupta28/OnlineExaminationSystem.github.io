<html>
<head>
<style>
body
{
	background-image: url("aksh.jpeg");
	background-size: 100%;
    padding-top: 40px;
}
div.aks
{
	text-align : center;
	font-size : 100px;
	font-weight : bold;
	font-family : lucida handwriting;
}
</style>
</head>
<body>
<div class="aks">Check your <img src = "dentisty-iq-logo.png" height="110px" width="110px"></img></div>
<br><br>
<form action=" " method="post">
<input type="submit" name="check" value="Start test" style="margin-left:235px;height:80px;width:200px;background-color:black;color:white;font-family:lucida handwriting;font-size:20px">
<?php
if(isset($_POST["check"]))
{
	header("location:http://localhost/p2.php");
}
?>
<input type="submit" name="new" value="Sign up" style="margin-left:30px;height:80px;width:200px;background-color:black;color:white;font-family:lucida handwriting;font-size:20px">
<?php
if(isset($_POST["new"]))
{
	header("location:http://localhost/p3.php");
}
?>
<input type="submit" name="result" value="Result" style="margin-left:30px;height:80px;width:200px;background-color:black;color:white;font-family:lucida handwriting;font-size:20px">
<?php
if(isset($_POST["result"]))
{
	header("location:http://localhost/pr.php");
}
?>
<input type="submit" name="admin" value="Administrator" style="margin-left:30px;height:80px;width:200px;background-color:black;color:white;font-family:lucida handwriting;font-size:20px"></form>
<?php
if(isset($_POST["admin"]))
{
	header("location:http://localhost/p4.php");
}
?>
</form>
</body>
</html>