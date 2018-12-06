<?php
include "database.php";
date_default_timezone_set("Asia/Kolkata");
$lastvisit=date('Y-m-d H:i:s');
$lastvisitsql = mysqli_query($conn,"UPDATE users SET lastvisit = '$lastvisit' WHERE username = '$username'");
if(! $lastvisitsql )
 	{
	die('Could not enter data: ' . mysqli_error($conn));
	}
?>