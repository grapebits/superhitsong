<?php
$msg1='';
$msg2='';
$msg3='';
$msg4='';
$msg5='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$add1= $_POST['add1'];
$add2= $_POST['add2'];
$add3= $_POST['add3'];
$add4= $_POST['add4'];
$add5= $_POST['add5'];

$addsql1 = mysqli_query($conn,"UPDATE adds SET add1='$add1',add2='$add2',add3='$add3',add4='$add4',add5='$add5' WHERE id = '1'");
if(! $addsql1 ) {  die('Could not enter data: ' . mysqli_error($conn)); }
if( $addsql1 ){ $msg1="Adds Updated Successfully"; }
include "../lastvisit.php";



}
?>




<?php
include "../database.php";
$listselectsql = "SELECT * FROM adds WHERE id = '1'";
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 
$extractedadd1="{$row['add1']}";
$extractedadd2="{$row['add2']}";
$extractedadd3="{$row['add3']}";
$extractedadd4="{$row['add4']}";
$extractedadd5="{$row['add5']}";
}
?>







<div id="editor">

<div id="title"><h1>Edit Adds Setting</h1>
<?php echo("<p align=\"center\" class=\"signp\">$msg1 $msg2 $msg3 $msg4 $msg5</p>"); ?>
<form name="ChangeAddsForm" method="POST" action="">
<label>Add 1 : </label><br />
<?php echo("<textarea style=\"width:100%\" name=\"add1\" >$extractedadd1</textarea>"); ?>
<br />
<br />
<label>Add 2 : </label><br />
<?php echo("<textarea style=\"width:100%\" name=\"add2\" >$extractedadd2</textarea>"); ?>
<br />
<br />
<label>Add 3 : </label><br />
<?php echo("<textarea style=\"width:100%\" name=\"add3\" >$extractedadd3</textarea>"); ?>
<br />
<br />
<label>Add 4 : </label><br />
<?php echo("<textarea style=\"width:100%\" name=\"add4\" >$extractedadd4</textarea>"); ?>
<br />
<br />
<label>Add 5 : </label><br />
<?php echo("<textarea style=\"width:100%\" name=\"add5\" >$extractedadd5</textarea>"); ?>
<br />
<br />
<input class="fullsubmit" type="submit" value="Save" name="save_adds">
</form>
</div>

<br />
</div>
</div>