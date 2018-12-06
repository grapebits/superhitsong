<?php
$msg='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$newpassword= mysqli_real_escape_string($conn,$_POST['newpassword']);
$newpasswordsql = mysqli_query($conn,"UPDATE users SET password = '$newpassword' WHERE username = '$username'");
if(! $newpasswordsql )
 	{ 
	die('Could not enter data: ' . mysqli_error($conn)); 
	}
if( $newpasswordsql ){ $msg="Password Changed Successfully"; }
include "../lastvisit.php";
}
?>

<div id="editor">

<div id="title"><h1>Change Password</h1>
<?php echo("<p align=\"center\" class=\"signp\">$msg</p>"); ?>
<p>Enter New Password:</p>
<form name="ChangePasswordForm" method="POST" action="">
<input class="fulledit" width="50%" type="text" name="newpassword"> <br /><br />
<input class="fullsubmit" type="submit" value="Save" name="TitleSubmit">
</form>
</div>

<br />
</div>
</div>