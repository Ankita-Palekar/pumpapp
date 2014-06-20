

<?php
//print_r($_POST);
//  $url= urldecode($_SERVER['REQUEST_URI']);
$url=urldecode($_POST["url"]);
echo($url);
//print_r($_POST);
//echo $url;
  if (empty($errors)) {
    
    // Perform Update


    $query="INSERT INTO LINKS (USER_ID, LINK_URL) VALUES (";
    // $query.=$_SESSION['userID'];
    $query.="2 ,";
     //$query.="'WWW.GOOGLE.COM' ," ;
$query.="'$url'";
    // $query.="3" ;
   // 
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
