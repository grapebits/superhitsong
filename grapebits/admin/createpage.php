<?php
$myfile = fopen("../../category/$cat/$title.php", "w") or die("Unable to open file!");
$txt = "<?php include \"../../header_songpage.php\" ?>";
fwrite($myfile, $txt);


$txt = "<div class=\"updates\" align=\"left\">";
fwrite($myfile, $txt);



$txt = "<h2>Free Download ". $title ." By ". $username ."</h2>";
fwrite($myfile, $txt);


$txt = "<center><?php include \"../../adds/page_add2.php\"; ?></center>";
fwrite($myfile, $txt);




$txt = "<hr/><center><img src=\"../../image/song.jpg\" alt=\"song\"><br />$song_url<br /><a href=\"../../uploads/$song_url\">[Click here to download]</a><br />Category :<br />$cat</center></div>";
fwrite($myfile, $txt);

$txt = "<center><?php include \"../../adds/page_add3.php\"; ?></center>";
fwrite($myfile, $txt);




$txt = "<div class=\"catList\" align=\"left\"><h2>Related Tags</h2><div class=\"catRow odd\"><br />$tags<br />...</div></div>";
fwrite($myfile, $txt);


$txt = "<?php include \"../../footer_songpage.php\" ?>";
fwrite($myfile, $txt);
fclose($myfile);
?>
