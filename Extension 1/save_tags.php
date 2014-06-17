<?php require_once("session.php"); ?>
<?php require_once("db_connection.php"); ?>

<?php 
 $url=urldecode($_POST["url"]);
//$tags=$_POST["tags"];
//echo($url);
//print_r($_POST);
//echo $url;
//$url="www.gooogle.com";
$tags=$_POST["tags"];

  if (empty($errors)) {
    
    // Perform Update


    $query="INSERT INTO LINKS (USER_ID, LINK_URL, tags) VALUES (";
    // $query.=$_SESSION['userID'];
    $query.="2 ,";
     //$query.="'WWW.GOOGLE.COM' ," ;
$query.="'$url',";
    // $query.="3" ;
   $query.="'$tags'";
    $query.=");";

    $result = mysqli_query($connection, $query);

    if ($result && mysqli_affected_rows($connection) == 1) {
      // Success
      echo "Awesome";
      $_SESSION["message"] = "Page updated.";

    } else {
      // Failure
      $_SESSION["message"] = "Page update failed.";
    }
  
  }

?>