<?php require_once("db_connection2.php"); ?>
<?php
  if (empty($errors)) {
    
    $lid=$_REQUEST["lid"];

    $query="update links set fav=1 where link_id=";
    $query.="{$lid}";
echo $query;
    $result = mysqli_query($connection, $query);

        if ($result) {
        echo "dne";
          }
        
        else
        {
        echo "You have not saved any links yet.";
        }

       } else {
        
         echo "failer";
       }
  
  

?>


