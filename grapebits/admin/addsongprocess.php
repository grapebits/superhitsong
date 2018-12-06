<?php
$msg='';
$msg1='';
$msg2='';
$msg3='';
$msg4='';
$uploadedfile='';

if($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST['add_song_button']))
 {


$user_id='';
include "../user_id.php";

$song_url=$_POST['song_url'];
$cat=$_POST['category'];
$title=$_POST['title'];
$tags=$_POST['tags'];
$date=date('Y-m-d H:i:s');
extract($_POST);
	
	$rs=mysqli_query($conn,"select * from song where song_name='$title'");
	
	$page_url="category/$cat/$title.php";
	$sql = "INSERT INTO song "."(user_id,song_dj,song_name,song_url,song_type,song_date,tags,page_url,song_date_time) "."VALUES "."('$user_id','$username','$title','$song_url','$cat','$date','$tags','$page_url','$date')";
	$retval = mysqli_query( $conn,$sql ); 
	if(! $retval )
 	{ 
	die('Could not enter data: ' . mysqli_error($conn)); 
	}
	
	include "createpage.php";
       if( $retval ) {  $msg="Song Added Successfully";  }
}




}




if(isset($_POST['upload_song_button']))
 {

		$target_dir = "../../uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if file already exists
	if (file_exists($target_file)) {
	    $msg1= "Sorry, file already exists.";
	    $uploadOk = 0;
		}


		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $msg2= "Sorry, your file was not uploaded.";


		// if everything is ok, try to upload file
		} else {
   		 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    		    $msg3= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    			$uploadedfile=basename( $_FILES["fileToUpload"]["name"]);
		} else {
    		    $msg4= "Sorry, there was an error uploading your file.";
    		}
		}

			


				

				

				
}




?>