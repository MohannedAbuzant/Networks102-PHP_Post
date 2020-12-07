<?php
 $userName = $_REQUEST["userName"];
 $Password = $_REQUEST["password"];
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db='networks';
 $conn =  mysqli_connect($servername, $username, $password,$db);
 //$sum = $T1+$T2;
 //$prod = $T1*$T2;
 
if (!($conn)) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";
$sql="select * from authoriedusers where userName='$userName'and password='$Password'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row!=NULL){
echo "Authorized user \n";
foreach(glob('./pic/*.*') as $name){
	echo $name."\n";
}
}
else{
echo "Access denied";

}

     
?>
