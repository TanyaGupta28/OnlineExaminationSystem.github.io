<html>
<body>
<form type=" " method="post">
enter email id<input type="text" name="id">
<br>
<br>
contact number<input type="text" name="con">
<br>
<br><input type="submit" name="table" value="delete record" style="margin-left:80px">
</form>
</body>
</html>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("hp") or die("please check database");
if(isset($_POST["table"]))
{
	$con = $_POST["con"];
	$ins = mysql_query("select pass from emp where contact = '$con'");
if($ins)
{
		echo"your password is <input type='text' value='$ins'";
}
else
{
	echo mysql_error();   
}
}
?>