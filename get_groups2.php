<?php require_once("db_connection2.php"); ?>

<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select group_name from Groups";

    $result = mysqli_query($connection, $query);

    if ($result) {

      foreach($result as $value)
      {
     
        foreach ($value as $item) { 
          // SESSION["message"] = "Page updated.";
          $output="<li><button class=\"btn btn-default btn-xs\">";
          $output.=$item;
          //$output.="<span class=\"badge right\">25</span>";
          $output.="</button>-<a href=\"#\">View Members</a></li></br>";
          echo $output;
       }
     }
   }
    else {
      // Failure
       //  $_SESSION["message"] = "Page update failed.";
         //echo "failer";
       }
}
else echo ("oh no");
?>