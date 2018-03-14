<html>
 <head>
 	<?php include 'style.css';?>
  <title>Places</title>
  <link rel="icon" type="image/jpg" href="/images/logo.jpg"  size="5x5">
 </head>	
 <body>

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
 
	<?php
	echo '<ul><a name="munnar" href="mostVisited.php?name=Munnar" onClick="">Munnar</a></ul>
	<ul><a name="arakku" href="mostVisited.php?name=Arakku" onClick="">Arakku</a></ul>
	<ul><a name="sanjose" href="mostVisited.php?name=San Jose" onClick="">San Jose</a></ul>
	<ul><a name="sanfrancisco" href="mostVisited.php?name=San Francisco" onClick="">San Francisco</a></ul>
	<ul><a name="bangalore" href="mostVisited.php?name=Bangalore" onClick="">Bangalore</a></ul>
	<ul><a name="mysore" href="mostVisited.php?name=Mysore" onClick="">Mysore</a></ul>
	<ul><a name="fortkochi" href="mostVisited.php?name=Fort Kochi" onClick="">Fort Kochi</a></ul>
	<ul><a name="vizag" href="mostVisited.php?name=Vizag" onClick="">Vizag</a></ul>
	<ul><a name="hyderabad" href="mostVisited.php?name=Hyderabad" onClick="">Hyderabad</a></ul>
	<ul><a name="mumbai" href="mostVisited.php?name=Mumbai" onClick="">Mumbai</a></ul>';
	?>
</body>
</html>