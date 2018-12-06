<?php include "header.php"; ?>

<div class="catList" align="left"><h2>All Categories</h2>
<center><?php include "adds/add3.php"; ?></center>
<?php
include "grapebits/database.php";
$listselectsql1 = 'SELECT * FROM category ORDER BY date_time DESC';
$listselect_retval1 = mysqli_query( $conn,$listselectsql1 ); 
if(! $listselect_retval1 ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row1 = mysqli_fetch_array($listselect_retval1, MYSQLI_BOTH)) 
{ 
echo("<div class=\"catRowHome\" style=\"font-size:16px\"><form method=\"POST\" action=\"category.php\"><input type=\"hidden\" name=\"cat_name\" value=\"{$row1['cat_name']}\"><input style=\"width:100%;background:white;height:40px;font:30px bold;\" type=\"submit\" name=\"submit\" value=\"{$row1['cat_name']}\"></form></div>");
}
?>




<div class="catRow odd"><a href="">...</a></div>


<?php include "footer.php"; ?>