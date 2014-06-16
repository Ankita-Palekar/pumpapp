<?php require_once("session.php"); ?>
<?php require_once("db_connection.php"); ?>



<?php


  if (empty($errors)) {
    
    // Perform Update

    $query="select group_name from groups";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
  
      $output="<ul>";
      foreach($result as $value)
      {
      $output.="<li><a href=\"#\" class=\"list-group-item\">";
        foreach ($value as $item) { 
          $output.= "$item"; 
          }
          $output.="</a>";
        $output.="</li>";
      }
        $output.="</ul>";
        }
        else
        {
         $output= "You have not saved any links yet.";
        }

        echo $output;

     // $_SESSION["message"] = "Page updated.";

       } else {
      // Failure
       //  $_SESSION["message"] = "Page update failed.";
         echo "failer";
       }
  
  

?>


