<?php
include "database.php";
$lastvisit=date('Y-m-d H:i:s');
$lastvisitsql = mysqli_query($conn,"UPDATE users SET lastvisit = '$lastvisit' WHERE id = '$user_id'");
if(! $lastvisitsql )
 	{ 
	die('Could not enter data: ' . mysqli_error($conn)); 
	}
?>