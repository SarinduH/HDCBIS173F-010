<?php
if(isset($_SESSION["Uname"]) && time()-$_SESSION["LAT"]<=10)
{$_SESSION["LAT"]=time();
session_start();
echo "Hello, ".$_SESSION["Uname"]."<br />";
if($_SESSION["Utype"]=="Admin")
{
	echo "<a href=view.php>View Data </a><br />";
	echo "<a href=add.php>Add Data </a><br />";
}
else if($_SESSION["Utype"]=="User")
{
	echo "<a href=view.php>View Data </a><br />";
}
else
{
	header("Location:Login.php");
}
}
?>