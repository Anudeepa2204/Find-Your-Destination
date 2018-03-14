<html>
 <head>
  <title>Users</title>
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

<div class="wrap">
  <div class="floatleft">
    <form action="addUser.php" method="post">
        <input size="15" type="text" placeholder="First Name" name="firstName" required>
        <input size="15" type="text" placeholder="Last Name" name="lastName" required>
        <input size="25" type="email" placeholder="Email Id" name="email" required>
        <input size="50" type="text" placeholder="Address" name="address" required>
        <input size="10" type="text" maxlength="10" onkeypress = 'return event.charCode >= 48 && event.charCode <= 57' placeholder="Home Phone Number" name="homePhone" required>
        <input size="10" type="text" maxlength="10" onkeypress = 'return event.charCode >= 48 && event.charCode <= 57' placeholder="Cell Phone Number" name="cellPhone" required>
        <input name="create" type="submit" placeholder="Create User">
    </form>
  </div>

  <div class="floatright">
    <form action="searchUsers.php" method="post">
        <select name="taskOption">
          <option value="firstName">First Name</option>
          <option value="lastName">Last Name</option>
          <option value="email">Email Id</option>
          <option value="homePhone">Home Phone</option>
          <option value="cellPhone">Cell Phone</option>
        </select>
        <input size="10" type="text" placeholder="Enter Username" name="USERNAME" required>
        <input name="search" type="submit" placeholder="Search User">
    </form>
  </div>
</div>
</body>
</html>