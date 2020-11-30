<?php
 $image =$_REQUEST["image"];
 $imageName=$_REQUEST["imageName"];
 $imagedecode= base64_decode($image);

	 if(file_put_contents("E:/xampp/htdocs/pic/".$imageName,$imagedecode)==0){
	echo"failed";
 }
foreach(glob('./pic/*.*') as $name){
	echo $name."\n";
}

     
?>
