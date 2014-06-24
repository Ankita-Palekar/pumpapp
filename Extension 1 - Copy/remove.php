<?php require_once("db_connection2.php"); ?>

<?php
$url=$_POST["url"];
//$id=$_POST["id"];
//$url="www.google.co.in";
if (empty($errors)) {
    

   $query="delete from links where link_url='$url' and user_id=1 ;";
    
 // $query="insert into links (user_id, link_url) values ($id, $url); ";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
      echo "Awesome";
      //$_SESSION["message"] = "Page updated.";

    } else {
      // Failure
      echo "fail";
      //$_SESSION["message"] = "Page update failed.";
    }
  
  }


?>