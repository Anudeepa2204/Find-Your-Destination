<html>
 <head>
  <title>User Added</title>
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
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $homePhone = $_POST['homePhone'];
    $cellPhone = $_POST['cellPhone'];
    $address = $_POST['address'];

    $servername = localhost;
    $username = "findyo10_admin";
    $password = "Test1234";
    $dbname = "findyo10_users";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else {
      $sql = "INSERT INTO userLists (firstname, lastname, email, address, homePhone, cellPhone)
              VALUES ('$firstName', '$lastName', '$email', '$address', '$homePhone', '$cellPhone')";
    }

    if ($conn->query($sql) === TRUE) {
      print "User Added Successfully";
    } else {
      print "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

    ?>
  </p>
 </body>
</html>