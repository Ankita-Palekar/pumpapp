<?php require_once("db_connection2.php"); ?>

<?php

  if (empty($errors)) {
    
    // Perform Update
    $tag_id=$_REQUEST["id"];
    $query="select tags from links where link_id=";
    $query.="$tag_id";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
  
  
//$output="";
      foreach($result as $value)
      {
        foreach ($value as $item) {  

        // 
          // $output="<input type=\"text\" value=\"";
          $output=$item;
          // $output.="\" class=\"form-control fg\" data-role=\"tagsinput\" placeholder=\"Add tags\" />";
          echo $output; 
         
          }

      }
 }
    
        else
        {
         $output= "You have not saved any links yet.";
        }

       //echo $output;


       } else {
        
         echo "failer";
       }
  
  

?>


