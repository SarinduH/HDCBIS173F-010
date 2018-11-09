<html>
<head>
<title>Login</title>
</head>
<body>
<form name="frm" method="post" action="#">
User Name:- <input type="text" name="txtname" /><br />
Password:- <input type="text" name="txtpassword" /><br />
<input type="submit" name="btnLogin" value="Login" />
<input type="reset" name="btnreset" value="Reset" />
</form>
</body>
</html>

<?php
if(isset($_POST["txtName"]))
{
	$un=$_POST["txtName"];
	$pw=$_POST["txtPw"];
}
	$flag=0;
	$r=mysqli_fetch_array($result);
	while ($r)
	{
		if($un=="admin" && $pw==1234)
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
		session_start();
		$_SESSION["Uname"]=$un;
		$_SESSION["LAT"]=time();
		header("Location:welcome.php");
	}
	else
	{
		echo "Invalid Username or Password";
	}
	mysqli_close();
	
