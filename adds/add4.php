<?php
include "grapebits/database.php";
$addselectsql4 = "SELECT * FROM adds WHERE id='1'";
$addselect_retval4 = mysqli_query( $conn,$addselectsql4); 
if(! $addselect_retval4 ) { die('Could not get data: ' . mysqli_error($conn)); }
while($addrow4 = mysqli_fetch_array($addselect_retval4, MYSQLI_BOTH)) 
{ 
echo ("{$addrow4['add4']}");
}

?>