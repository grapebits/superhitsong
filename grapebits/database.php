<?php
$dbhost = 'localhost';
 	$dbuser = 'root';
 	$dbpass = 'usbw';
	$db='song_db';
 	$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or  die('Could not connect !<br />Please contact the site\'s administrator.');

$db = mysqli_select_db($conn,$db) or  die('Could not connect to database !<br />Please contact the site\'s administrator.');
?>