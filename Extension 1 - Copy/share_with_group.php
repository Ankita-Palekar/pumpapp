<?php require_once("db_connection2.php"); ?>

<?php

  if (empty($errors)) {
    
    $selected_group=$_POST["id"];

    $query="select groups_id from Groups where group_name like";
    $query.="'$selected_group'";

    $result = mysqli_query($connection, $query);
    //$output="hi!";
    if ($result) {
      // Success
     foreach($result as $value)
     {
      foreach ($value as $show) {
        $output=$show;
      }
     
   };
   echo $output;
     // $_SESSION["message"] = "Page updated.";

       }} else {
      // Failure
       //  $_SESSION["message"] = "Page update failed.";
         echo "failer";
       }
  
  

?>
