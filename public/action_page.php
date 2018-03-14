
<html>
 <head>
  <title>Secure Login</title>
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
<p>
<?php
extract($_POST);
if(!$USERNAME || !$PASSWORD){
	print( 'please fill the username and password');
}
else{
$readf = fopen("password.txt", "r") or die("Oops!!! File not found");
$array = fread($readf,filesize("password.txt"));
$valid = 0;
while( !feof( $readf) && !$valid){
	$user = explode(",", $array);
	if(($USERNAME == $user[0]) ){
		$valid = 1;
	}
	if(!$valid){
		break;
	}
}
if( $valid ){
	
	if($PASSWORD != $user[1]){
		print( 'username or password is wrong!');
	}
	else {
		print( 'Successfully logged in');
	}
}
else{
	print( 'you have no access');
}

fclose($readf);
}
?>
</p>
</body>
</html>
