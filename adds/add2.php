<?php
include "grapebits/database.php";
$addselectsql2 = "SELECT * FROM adds WHERE id='1'";
$addselect_retval2 = mysqli_query( $conn,$addselectsql2 ); 
if(! $addselect_retval2 ) { die('Could not get data: ' . mysqli_error($conn)); }
while($addrow2 = mysqli_fetch_array($addselect_retval2, MYSQLI_BOTH)) 
{ 
echo ("{$addrow2['add2']}");
}

?>