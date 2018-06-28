<html>
<body>
<form type=" " method="post">
enter id<input type="text" name="id">
<br>
<br>
<input type="submit" name="table" value="forgot password" style="margin-left:80px"><br><br>
<?php
if(isset($_POST["table"]))
{
	echo"enter contact number  <input type='text' name='con'"."<br>"."<br>"."<br>";
	echo"<input type='submit' name='xyz' value='retain password' style='margin-left:80px'>";
}
$con = mysql_connect("localhost","root","");
mysql_select_db("hp") or die("please check database");
if(isset($_POST["xyz"]))
{
	$em = $_POST["id"];
	$ins = mysql_query("select pass from emp where email='$em'");
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
</form>
</body>
</html>