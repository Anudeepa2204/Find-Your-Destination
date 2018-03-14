<?php
//print_r($_SESSION);
   //echo "user is logged in";
   include("mysql.php");

   $sql = "SELECT id, first_name, last_name, username, is_admin from user";
   $result = $conn->query($sql);
   //print_r($result);
   $conn->close();
   $myArray = array();  
   while($user = $result->fetch_assoc()) {
     $object = new stdClass();
     $object->id=$user['id'];
     $object->first_name = $user['first_name'];
     $object->last_name = $user['last_name'];
     $object->username=$user['username'];
     $myArray[]=$object;
   }


   $userJson = json_encode($myArray);

   echo $userJson;
?>
