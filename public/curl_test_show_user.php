<?php
$ch = curl_init();
$url="http://buyurbook.x10host.com/allusers.php";
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);
$data =(json_decode($result, true));
// Will dump a beauty json :3

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">
<body>
    <div id="user_list_header">
        <a href="/logout.php">Logout</a>
    </div>
    <div id="user_list">
        <h2>List of users in database</h2>
        <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        <?php
            foreach($data as $user) {
                 echo '<tr>';
                 echo '<td>' . $user['firstname'] . '</td>';
                 echo '<td>' . $user['lastname'] . '</td>';
                 echo '<td>' . $user['emailid'] . '</td>';
                 echo '</tr>';
            }
        ?>
    </table>
    </div>
</body>
</html>


