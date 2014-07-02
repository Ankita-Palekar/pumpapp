<?php require_once("db_connection2.php"); ?>

<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
 

<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select link_id, link_url from links;";

    $result = mysqli_query($connection, $query);

    if ($result) {
      $output="<li class=\"list-group-item list-group-item-success\"> Your Link ";
      $output.=$link;
      $output.="has been viewed by "
      $output.=$user;
      $output.="from the group ";
      $output.=$group;

      $output.="</li>";
        }
        else
        {
        
        }

        
        } else {
        
       }
  
  

?>


