<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "necktapers_database";
  $connection = "";
  // to establish a connection we will do the following
  // this connection variable is now an object
  //now one of the few ways we can check if our connection is up and running:
    try{
      $connection = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    }
    catch(mysqli_sql_exception){
      echo "could not connect<br>";
    }

  if($connection){
    echo "You are connected !<br>";
  }
  
  // to avoid any ugly error message displaying to the user
  // in case we couldn't connect to a database 
  // wrap your connection with try{};
  // then catch mysqli_sql_exception
  // now this file is complete let's head back to our index file and generate some html after our php script
?>