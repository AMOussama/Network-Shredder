<?php
$myfile = fopen("fr_lang.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("fr_lang.php"));
fclose($myfile);
?>
