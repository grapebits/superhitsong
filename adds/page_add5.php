<?php
include "../../grapebits/database.php";
$addselectsql5 = "SELECT * FROM adds WHERE id='1'";
$addselect_retval5 = mysqli_query( $conn,$addselectsql5 ); 
if(! $addselect_retval5 ) { die('Could not get data: ' . mysqli_error($conn)); }
while($addrow5 = mysqli_fetch_array($addselect_retval5, MYSQLI_BOTH)) 
{ 
echo ("{$addrow5['add5']}");
}

?>