<?php require_once("db_connection2.php"); ?>


<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select link_id from links where link_url=";
    $query.="'$url' and user_id=1";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
  
     // $output="<ul>";



      $output=" <div class=\"row\">";
      foreach($result as $value)
      {
     
        foreach ($value as $item) { 
        //  require_once("share_modal.php");
            $safe_url=urlencode($item);
            //echo $safe_url;
           
      $query2="select link_id from links where link_url=";
        $query2.="'$item'";
        $id=mysqli_query($connection, $query2);
      
   foreach ($id as $link_id) {
        foreach ($link_id as $my_id) {
        echo $my_id;
        }
        }
          }
      }
        $output.="</div>";
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


