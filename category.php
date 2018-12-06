<?php include "header.php"; ?>

<?php

if(isset($_POST['submit']))
 {	

	
	$cat_name=$_POST['cat_name'];
echo ("<h2>Category : $cat_name</h2><hr />");
	
	extract($_POST);

echo("<center>");
include "adds/add2.php"; 
echo("</center>");
	
		include "grapebits/database.php";
		$listselectsql = "SELECT * FROM song WHERE song_type='$cat_name' ORDER BY song_date_time DESC";
		$listselect_retval = mysqli_query( $conn,$listselectsql ); 
		if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
		while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
		{ 
		echo("<div align=\"left\" class=\"catRowHome\"><b>{$row['song_dj']} : <a href=\"{$row['page_url']}\"><font color=\"brown\">{$row['song_name']}</font> <font color=\"black\">({$row['song_type']}) </font> </b> <font color=\"blue\"><b>[{$row['song_date']}]</b></font> <b> <b><span style=\"background:green;padding: 1px 7px;font-size: 11px;font-weight: bold;color: #FF0000;margin: 0px 0px;border-radius: 40px;\"><font color=\"white\">Click Here</font></span></a></b> </div>");
		}



}



?>
<br />
<?php include "footer.php"; ?>