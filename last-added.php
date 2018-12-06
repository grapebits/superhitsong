<?php 
include "header.php";
?>
<div class='updates' align="left">
<h2>Last 100 Songs</h2>


<hr/>

<?php
include "grapebits/database.php";
$listselectsql = 'SELECT * FROM song ORDER BY song_date_time DESC LIMIT 100';
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 
echo("<div align=\"left\"><b>{$row['song_dj']} : <a href=\"{$row['page_url']}\"><font color=\"brown\">{$row['song_name']}</font> <font color=\"black\">({$row['song_type']}) </font> </b> <font color=\"blue\"><b>[{$row['song_date']}]</b></font> <b> <b><span style=\"background:green;padding: 1px 7px;font-size: 11px;font-weight: bold;color: #FF0000;margin: 0px 0px;border-radius: 40px;\"><font color=\"white\">Click Here</font></span></a></b> </div>");
}
?>




<div class="catList" align="left"><h2>Online Services</h2>
<div class="catRow odd"><a href="last-added.php">Last Added</a></div>
<div class="catRow odd"><a href="http://github.com/grapebits/dragme">Drag::me IDE</a></div>
</div></div>

<?php 
include "footer.php";
?>