<?php
 $server = 'localhost';
 $database = 'firstdb';

  $connect = mysqli_connect('localhost','root','') or die('Connection failed');

  //Connecting with a specific database.
  mysqli_select_db($connect,$database) or die('Connection to database is failed');

  mysqli_close($connect);
?>