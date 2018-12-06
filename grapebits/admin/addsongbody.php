
<div id="editor">



<div id="title"><h1>Add Song</h1>

<div style="border:1px solid red;">
<form action="" method="post" enctype="multipart/form-data">
    Select song to upload :<br /><br />
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Song" name="upload_song_button">
</form>
</div>


<?php echo "<p style=\"signp\" align=\"center\">$msg $msg1 $msg2 $msg3 $msg4</p>"; ?>
<?php echo "<p style=\"signp\">Song File : $uploadedfile</p>"; ?>
<p>Enter Name of the Song :</p>
<form name="EditorForm" method="POST" action="">
<input type="hidden" name="song_url" value="<?php echo $uploadedfile; ?>">
<input class="fulledit" type="text" name="title" required>

<p>Choose Category :</p>
</div>






<select name="category" class="fulledit" required>
<?php
include "../database.php";
$user_id='';
include "../user_id.php";
$listselectsql = "SELECT * FROM category";
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 
echo("<option value={$row['cat_name']} >{$row['cat_name']}</option>");
}
?>
</select>
<p>Tags :</p>
<textarea rows="5" cols="50" name="tags" style="width:100%;height:15%;">
</textarea>
















<br /> <br />
  <div id="sb"> <input class="sbt" type="submit" value="Add" name="add_song_button"></div>
</form>

<br />
</div>
</div>