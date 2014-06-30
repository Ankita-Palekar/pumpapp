<?php require_once("db_connection2.php"); ?>
<?php
  if (empty($errors)) {
    
    $lid=$_REQUEST["lid"];
    $uid=$_REQUEST["uid"];

    $query="INSERT INTO favourite(link_id, user_id) VALUES";
    $query.=" ($lid, $uid) ;";
echo $query;
    $result = mysqli_query($connection, $query);

        if ($result) {
        echo "Done";
        
          }
        
        else
        {
        echo "You have not saved any links yet.";
        }

       } else {
        
         echo "failer";
       }
  
  

?>


