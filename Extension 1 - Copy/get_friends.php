<?php require_once("db_connection2.php"); ?>
<?php

  if (empty($errors)) {
//$output=array();
    $query="select emailId from users order by emailId asc;";

    $result = mysqli_query($connection, $query);
$name=array();
    if ($result) {
      while($row=mysqli_fetch_assoc($result)){
           $name[]=$row["emailId"];
          
        }
      }
      else
        {
         echo "No friends in your contact list";
        }
  
       } else {
       echo("oh no"); 
   
       }
   $details=json_encode($name);
  print_r($details);

?>


