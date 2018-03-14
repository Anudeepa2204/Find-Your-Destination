<html>
 <head>
  <title>Search Result</title>
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
$value = $_POST['USERNAME'];
if(!$value){
  print("Please enter a value for search. Start again");
}
    $taskOption = $_POST['taskOption'];
    $servername = localhost;
    $username = "findyo10_admin";
    $password = "Test1234";
    $dbname = "findyo10_users";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
      switch ($taskOption) {
        case 'firstName':
            $sql = "SELECT firstName,lastName,email,address,homePhone,cellPhone FROM userLists WHERE firstName=\"test\"";
            $sql= str_replace("test", $value, $sql);
            break;
        case 'lastName':
            $sql = "SELECT firstName,lastName,email,address,homePhone,cellPhone FROM userLists WHERE lastName=\"test\"";
            $sql= str_replace("test", $value, $sql);
            break;
         case 'email':
            $sql = "SELECT firstName,lastName,email,address,homePhone,cellPhone FROM userLists WHERE email=\"test\"";
            $sql= str_replace("test", $value, $sql);
            break;
         case 'homePhone':
            $sql = "SELECT firstName,lastName,email,address,homePhone,cellPhone FROM userLists WHERE homePhone=test";
            $sql= str_replace("test", $value, $sql);
            break;
         case 'cellPhone':
            $sql = "SELECT firstName,lastName,email,address,homePhone,cellPhone FROM userLists WHERE cellPhone=test";
            $sql= str_replace("test", $value, $sql);
            break;
        default:
            print("Please choose one option in the dropdown");
            break;
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          print "First Name: " .$row["firstName"]. "<br>";
          print "Last Name: " .$row["lastName"]. "<br>";
          print "Email Id: " .$row["email"]. "<br>";
          print "Home Phone Number: " .$row["homePhone"]. "<br>";
          print "Cell Phone Number: " .$row["cellPhone"]. "<br>";
          print "Address: " .$row["address"]. "<br>";
          } 
        }
      else {
        print("0 results");
    }
    $conn->close();
  }
?>
</p>
</body>
</html>