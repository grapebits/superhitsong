<?php
$msg='';

if($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST['add_category_button']))
 {


$user_id='';
include "../user_id.php";

$cat=$_POST['category_name'];
$date=date('Y-m-d H:i:s');
extract($_POST);
	
	$rs=mysqli_query($conn,"select * from category where cat_name='$cat'");
	if (mysqli_num_rows($rs)>0)
	{
		$msg="Use another Category Name. A Category with same name allready exists."; include"insertpagebody.php"; include"footer.php"; exit;
	}

	$sql = "INSERT INTO category "."(cat_name,date_time) "."VALUES "."('$cat','$date')";
	$retval = mysqli_query( $conn,$sql ); 
	if(! $retval )
 	{ 
	die('Could not enter data: ' . mysqli_error($conn)); 
	}



//The name of the directory that we need to create.
$directoryName = '../../category/'.$cat;

//Check if the directory already exists.
if(!is_dir($directoryName)){
    //Directory does not exist, so lets create it.
    mkdir($directoryName, 0755, true);
}

else
{
echo "Error in ceating Directory";
}















       if( $retval ) {  $msg="Category Added Successfully";  }


}

}
?>