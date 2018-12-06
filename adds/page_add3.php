<?php
include "../../grapebits/database.php";
$addselectsql3 = "SELECT * FROM adds WHERE id='1'";
$addselect_retval3 = mysqli_query( $conn,$addselectsql3 ); 
if(! $addselect_retval3 ) { die('Could not get data: ' . mysqli_error($conn)); }
while($addrow3 = mysqli_fetch_array($addselect_retval3, MYSQLI_BOTH)) 
{ 
echo ("{$addrow3['add3']}");
}

?>