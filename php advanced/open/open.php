<?php
$myfile = fopen("open.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("open.html"));
fclose($myfile);
?>