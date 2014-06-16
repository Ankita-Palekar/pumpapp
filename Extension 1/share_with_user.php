<?php require_once("session.php"); ?>
<?php require_once("db_connection.php"); ?>



<?php


  if (empty($errors)) {
    
    // Perform Update


    $query="select group_name from groups";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
      echo "Awesome";
      $output="<ul>";
      foreach($result as $value)
      {
      $output.="<li><a href=\"#\">";
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


      $_SESSION["message"] = "Page updated.";

       } else {
      // Failure
         $_SESSION["message"] = "Page update failed.";
       }
  
  

?>

<?php include("header.php"); ?>
<div>
   the file link has been added there.
</div>
<?php 
echo $output;
 ?>
<?php include("footer.php"); ?>
