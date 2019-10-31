<?php
include "connection1.php";
$sql = "INSERT INTO reg (firstname,lastname,password,confirmpassword)VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["password"]."','".$_POST["confirmpassword"]."')";
mysqli_query($conn,$sql);
if($conn->query($sql)===TRUE)
{
	
	header("location: confirm.html");
}
?>