<?php 
include "header.php";
?>
<div class='updates' align="left">
<h2>Latest Song Updates</h2>


<hr/>

<?php
include "grapebits/database.php";
$listselectsql = 'SELECT * FROM song ORDER BY song_date_time DESC LIMIT 30';
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 
echo("<div align=\"left\"><b>{$row['song_dj']} : <a href=\"{$row['page_url']}\"><font color=\"brown\">{$row['song_name']}</font> <font color=\"black\">({$row['song_type']}) </font> </b> <font color=\"blue\"><b>[{$row['song_date']}]</b></font> <b> <b><span style=\"background:green;padding: 1px 7px;font-size: 11px;font-weight: bold;color: #FF0000;margin: 0px 0px;border-radius: 40px;\"><font color=\"white\">Click Here</font></span></a></b> </div>");
}
?>


<div>
<a href="all_songs.php">[More Updates...]</a>
</div>
</div>

<center>
<?php include "adds/add2.php"; ?>
</center>

<div class="catList" align="left"><h2>Select Categories</h2>
</center>
<?php
include "grapebits/database.php";
$listselectsql1 = 'SELECT * FROM category ORDER BY date_time DESC LIMIT 10';
$listselect_retval1 = mysqli_query( $conn,$listselectsql1 ); 
if(! $listselect_retval1 ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row1 = mysqli_fetch_array($listselect_retval1, MYSQLI_BOTH)) 
{ 
echo("<div class=\"catRowHome\" style=\"font-size:16px\"><form method=\"POST\" action=\"category.php\"><input type=\"hidden\" name=\"cat_name\" value=\"{$row1['cat_name']}\"><input style=\"width:100%;background:white;height:40px;font:30px bold;\" type=\"submit\" name=\"submit\" value=\"{$row1['cat_name']}\"></form></div>");
}
?>




<div class="catRow odd"><a href="all_category.php">All Category</a></div>




<center>
<?php include "adds/add3.php"; ?>
</center>


</div>


<div class="catList" align="left"><h2>Online Services</h2>
<div class="catRow odd"><a href="last-added.php">Last Added</a></div>
<div class="catRow odd"><a href="http://github.com/grapebits/dragme">Drag::me IDE</a></div>
</div>

<?php 
include "footer.php";
?>