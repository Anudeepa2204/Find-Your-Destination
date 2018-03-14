<html>
 <head>
  <?php include 'style.css';?>
  <title>Recently Visited</title>
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
<p>Previously visited sites:<br>
	<ul>
	<p>
	<?php
    $previousbooks = array();
		foreach($_COOKIE as $key => $value){
      if($key == "PREVIOUSBOOKS") 
        $previousbook = json_decode($_COOKIE["PREVIOUSBOOKS"], true);
      }
		if($previousbooks != null)
		foreach($previousbooks as $key => $value)
			echo '<li><a href="mostVisited.php?name=' . $value . '">' . $value . '</a>' . $value . '</li>';
		?>
						
	</ul>
</body>
</html>