<?php 
include "database.php";

if ($user_id=='')
{
$sql = "SELECT id FROM users WHERE username='$username'";

$retval = mysqli_query( $conn,$sql );
 if(! $retval ) 
{ 
die('Could not get data: ' . mysqli_error($conn)); 
} 

while($row = mysqli_fetch_array($retval, MYSQLI_BOTH)) 
{ 
$user_id="{$row['id']}";
} 

}
else
{


}


?>
