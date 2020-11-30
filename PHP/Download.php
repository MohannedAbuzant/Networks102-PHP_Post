<?php
 $imageName= $_REQUEST["image"];

$pic=file_get_contents($imageName);
echo $pic;

     
?>
