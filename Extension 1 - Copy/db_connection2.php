<?php
	define("DB_SERVER", "166.62.18.107");
	define("DB_USER", "pumpapp");
	define("DB_PASS", "pumpapp123");
	define("DB_NAME", "pumpapp");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
  else{
  //  echo "connected";
  }


  //  $db=mysql_select_db(DB_NAME);

?>
