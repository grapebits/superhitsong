<?php
include "../../grapebits/database.php";
$addselectsql1 = "SELECT * FROM adds WHERE id='1'";
$addselect_retval1 = mysqli_query( $conn,$addselectsql1 ); 
if(! $addselect_retval1 ) { die('Could not get data: ' . mysqli_error($conn)); }
while($addrow1 = mysqli_fetch_array($addselect_retval1, MYSQLI_BOTH)) 
{ 
echo ("{$addrow1['add1']}");
}

?>