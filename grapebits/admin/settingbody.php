<?php
$msg='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$name= mysqli_real_escape_string($conn,$_POST['name']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$accountsql = mysqli_query($conn,"UPDATE users SET name = '$name', email='$email' WHERE username = '$username'");
if(! $accountsql ) {  die('Could not enter data: ' . mysqli_error($conn)); }
if( $accountsql ){ $msg="Account Updated Successfully"; }
include "../lastvisit.php";
}
?>




<?php
include "../database.php";
$listselectsql = "SELECT * FROM users where username='$username'";
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 
$extractedname="{$row['name']}";
$extractedemail="{$row['email']}";
}
?>







<div id="editor">

<div id="title"><h1>Edit Account Setting</h1>
<?php echo("<p align=\"center\" class=\"signp\">$msg</p>"); ?>
<form name="ChangePasswordForm" method="POST" action="">
<label>Name : </label><br />

<?php echo("<input class=\"fulledit\" width=\"50%\" type=\"text\" name=\"name\" value=$extractedname required>"); ?>
<br />
<br />
<label>E-mail : </label><br />
<?php echo("<input class=\"fulledit\" width=\"50%\" type=\"text\" name=\"email\" value=$extractedemail required>"); ?>
<br />
<br />
<input class="fullsubmit" type="submit" value="Save" name="TitleSubmit">
</form>
</div>

<br />
</div>
</div>