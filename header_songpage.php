<?php include "../../details.php"; ?>
<html>
<head>
<title>
<?php echo $site_name; ?> ::: Download Hindi Dj, Bhojpuri Dj, Bhakti Dj
</title>
<meta http-equiv="content-type" content="text/html; charset=ANSI" />
<meta name="description" content="Songs by <?php echo $site_owner; ?>, All Dj Song, Hindi Dj Mix, Hariyanvi Dj Mix, Bhojpuri Dj Mix, Punjabi Dj Mix, Bollywood Dj Mix, Free Download Song, <?php echo $site_name; ?>" />
<meta name="title" content="Songs by <?php echo $site_owner; ?>, Dj Mix Songs, All Dj Song, Hindi Dj Mix, Hariyanvi Dj Mix, Bhojpuri Dj Mix, Punjabi Dj Mix, Bollywood Dj Mix, Free Download Song, <?php echo $site_name; ?>" />
<meta name="keywords" content="Songs by <?php echo $site_owner; ?>, Dj Mix Songs, All Dj Song, Hindi Dj Mix, Hariyanvi Dj Mix, Bhojpuri Dj Mix, Punjabi Dj Mix, Bollywood Dj Mix, Free Download Song, <?php echo $site_name; ?>" />
<meta name="robots" content="index, follow" />
<meta name="language" content="en" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<meta name="distribution" content="global"/>
<meta name="geo.placename" content="India" />
<link rel="shortcut icon" href="../../image/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../../css/styles.css"/>
<link rel="stylesheet" href="../../css/paging.css" type="text/css" />

</head>
<body style="background:white";>


<div class="logo">

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------!>


<?php
include "grapebits/database.php";
$listselectsql = 'SELECT * FROM page WHERE name="main"';
$listselect_retval = mysqli_query( $conn,$listselectsql ); 
if(! $listselect_retval ) { die('Could not get data: ' . mysqli_error($conn)); }
while($row = mysqli_fetch_array($listselect_retval, MYSQLI_BOTH)) 
{ 


echo("<a href=\"\"><img src=\"{$row['url']}\" alt=\"<?php echo $site_name; ?>\" height=\"75\" width=\"300\"></a>"); 
echo("</div><div style=\"background-color: deeppink; padding: 3px; border-bottom: 1px dashed #FF9900;\"><span style=\"color: white;\">");
echo("<b><center>{$row['text']}</center></b></span></div>");
}
?>


<center><?php include "../../adds/page_add1.php"; ?></center>

