<div id="editor">

<div id="title"><h1>Support</h1>
<!-----------------------------------------------------------------------------------------------------!>
<ol type="1">
<?php
include "../database.php";
$listselectsql = 'SELECT * FROM support';
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 

echo("<li style=\"color:red;\">Ques : {$row['question']}<br />Answer : {$row['answer']}  <br /></li>");
echo("_");
}
?>
</ol>
<!------------------------------------------------------------------------------------------------------!>
</div>

<br />
</div>
</div>