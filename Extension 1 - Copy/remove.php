<?php require_once("session.php"); ?>
<?php require_once("db_connection.php"); ?>

<?php
$url=urldecode($_POST["url"]);

if (empty($errors)) {
    
    // Perform Update


    $query="delete from LINKS where link_url=";
    $query.="'$url'";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
      echo "Awesome";
      $_SESSION["message"] = "Page updated.";

    } else {
      // Failure
      $_SESSION["message"] = "Page update failed.";
    }
  
  }


?>