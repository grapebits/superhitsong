<?php
$msg='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$url= $_POST['url'];
$text= $_POST['text'];

$addsql1 = mysqli_query($conn,"UPDATE page SET url='$url',text='$text' WHERE name = 'main'");
if(! $addsql1 ) {  die('Could not enter data: ' . mysqli_error($conn)); }
if( $addsql1 ){ $msg1="Adds Updated Successfully"; }
include "../lastvisit.php";



}
?>




<?php
include "../database.php";
$listselectsql = "SELECT * FROM page WHERE name = 'main'";
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 
$extractedurl="{$row['url']}";
$extractedtext="{$row['text']}";
}
?>







<div id="editor">

<div id="title"><h1>Edit Adds Setting</h1>
<?php echo("<p align=\"center\" class=\"signp\">$msg</p>"); ?>
<form name="ChangeAddsForm" method="POST" action="">
<label>Url to header image : </label><br />
<?php echo("<input class=\"fulledit\" type=\"text\" name=\"url\" value=$extractedurl>"); ?>
<br />
<br />
<label>Header Text : </label><br />
<?php echo("<textarea style=\"width:100%\" name=\"text\" >$extractedtext</textarea>"); ?>
<br />
<br />

<input class="fullsubmit" type="submit" value="Save" name="save_adds">
</form>
</div>

<br />
</div>
</div>