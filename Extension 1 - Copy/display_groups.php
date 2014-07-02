<?php require_once("db_connection2.php"); ?>

<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select group_name from Groups";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
  
      $output="<ul>";
      foreach($result as $value)
      {
      $output.="<li>";
        foreach ($value as $item) { 
           $output.= "<button type=\"button\" class=\"btn btn-default\"";
            $output.=" id=\"$item\">";
          $output.= "$item"; 
          }
          $output.="</button>";
        $output.="</li>";
      }
        $output.="</ul>";
        }
        else
        {
         $output= "You have not saved any links yet.";
        }

        echo $output;


       } else {
        
         echo "failer";
       }
  
  

?>


