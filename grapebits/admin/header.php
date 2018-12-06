<?php
 include('session.php');
 $username=$login_session;
 include "../lastvisit.php";
?>
<html>
<head>
<title>GrapeBits | Admin</title>
<link rel="shortcut icon" type="image/x-icon" href="../assets/image/grape.gif" />

<link href="../assets/css/home1.css" rel='stylesheet' type='text/css' />
<script>UPLOADCARE_PUBLIC_KEY = 'your_public_key';</script>
<script src="../ckeditor/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="../assets/cssmenu/apple/styles.css">






</head>

<body>
<div id="content">

<div id="header">
<img src="../assets/image/grape_edit.gif" alt="Logo GrapeBits">


 <p class="hp"><br />Administration : <a href="dashboard.php"><?php echo $username; ?><a>
 <br />You are using GrapeBits v1.0 ,created by <a href="http://instagram.com/harsh_comp">Harsh Mishra</a>.
<br />Do you have questions or need help? Visit our <a href="support.php">support</a>.
 </p>



</div>
<!---------------------------------------------------------------------!>
       <div id='cssmenu'>

<ul>


<li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>

<li class='has-sub'><a href='#'><span>Settings</span></a>

  		<ul>

                <li><a href='setting.php'><span>Account Settings</span></a></li>

                <li class='last'><a href='changepassword.php'><span>Change Password</span></a></li>


   		</ul>

</li>


<li class='has-sub'><a href='#'><span>Editor</span></a>

 		 <ul>
                <li><a href='addsong.php'><span>Add Song</span></a></li>
                <li><a href='addcategory.php'><span>Add Category</span></a></li>

		</ul>

</li>
<li class='has-sub'><a href='#'><span>Manage</span></a>

 		 <ul>
<li><a href='adds.php'><span>Adds</span></a></li>
<li class='last'><a href='edithead.php'><span>Header</span></a></li>
		</ul>

</li>

<li class='logout'><a href='../logout.php'><span>Logout</span></a></li>


</ul>


</div>



