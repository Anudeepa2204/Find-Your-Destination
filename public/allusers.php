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
<h4>Users in Find Your Destination</h4>
<p>
  <table>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
          </tr>
  <?php
    $servername = localhost;
    $username = "findyo10_admin";
    $password = "Test1234";
    $dbname = "findyo10_users";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      print_r("error");
      die("Connection failed: " . $conn->connect_error);
    }
    else{
       $sql = "SELECT firstName,lastName,email FROM userLists";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
            foreach($result as $user) {
                 echo '<tr>';
                 echo '<td>' . $user['firstName'] . '</td>';
                 echo '<td>' . $user['lastName'] . '</td>';
                 echo '<td>' . $user['email'] . '</td>';
                 echo '</tr>';
            }
        }
    }
    
    ?>
  </table>
  <h4>Users in Buy Your Book (hosted by Tejas Panchal)</h4>
  <table>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
          </tr>
  <?php
      $cu = curl_init();
      $url="http://buyurbook.x10host.com/allusers.php"; // taking users from other host
      curl_setopt($cu, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($cu, CURLOPT_URL,$url);
      $result=curl_exec($cu);
      curl_close($cu);
      $data =(json_decode($result, true));
      foreach($data as $user) {
                 echo '<tr>';
                 echo '<td>' . $user['firstname'] . '</td>';
                 echo '<td>' . $user['lastname'] . '</td>';
                 echo '<td>' . $user['emailid'] . '</td>';
                 echo '</tr>';
            }
    
    ?>
  </table>








  </p>




</body>
</html>

