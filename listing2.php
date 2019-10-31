<?php
include "connection1.php";
$sql = "INSERT INTO con (name,email,subject,message)VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";
mysqli_query($conn,$sql);
if($conn->query($sql)===TRUE)
{
	
	header('location: confirm1.html');
}
?>