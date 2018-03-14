<html>
 <head>
  <title>Places</title>
  <link rel="icon" type="image/jpg" href="/images/logo.jpg"  size="5x5">
 </head>	
 <body>
 <?php include 'style.css';?>

 <div>
 <h1 class="title1"> <img src="/images/image.png" width="150" height="80" title="Find Your Destination" alt="oops image missing"> Find Your Destination</h1>
 </div>

 <div class="tab">
  <a href="index.php"> <button class="tablinks" onclick="">Home</button> </a>
  <a href="news.php"> <button class="tablinks" onclick="">News</button> </a>
  <a href="about.php"> <button class="tablinks" onclick="">About</button></a>
  <a href="contactread.php"> <button class="tablinks" onclick="">Contact Us</button></a>
  <a href="secureLogin.php"> <button class="tablinks" onclick="">Secure</button></a>
  <a href="place.php"> <button class="tablinks" onclick="">Products</button></a>
  <a href="Visited.php"> <button class="tablinks" onclick="">Recently Visited</button></a>
  <a href="users.php"> <button class="tablinks" onclick="">Users</button></a>
  <a href="allusers.php"> <button class="tablinks" onclick="">All Users</button></a>
</div>
</body>
</html>

<?php
error_reporting(E_ERROR | E_PARSE);
extract($_GET);
$nam = $_GET['name'];
$filename = 'places/test.txt';
$fileName = str_replace("test", $nam, $filename);
$previousbook = array();
foreach($_COOKIE as $key => $value){
	if($key == "PREVIOUSBOOKS") 
		$previousbook = json_decode($_COOKIE["PREVIOUSBOOKS"], true);
}
if(sizeof($previousbook) >= 5 && !in_array($nam, $previousbook)) array_shift($previousbook);
if(!in_array($nam, $previousbook))
  array_push($previousbook, $nam);
setcookie("PREVIOUSBOOKS", json_encode($previousbook));
$imgname = '<img src="images/test.jpg" alt="nill" width="600" height="300"/>';
$imageName = str_replace("test", $nam, $imgname);
echo $imageName;
$myfile = fopen($fileName , "r") or die('Unable to open file!');
while (($line = fgets($myfile)) !== false) {
	$var_value = $line;
	echo  $var_value;
}
fclose($myfile); 
?>