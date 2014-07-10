<?php require_once("db_connection2.php"); 
 require_once("session.php");
 require_once("functions.php"); ?>
<?php include("sessiontodata.php"); ?>

<?php
 confirm_logged_in();
 ?>
<?php
$userid=$ID;
  if (empty($errors)) {
    
    // Perform Update

    $query="select group_name from groups G, group_members M where G.groups_id=M.grp_id AND M.user_id={$userid}";

    $result = mysqli_query($connection, $query);

    if ($result) {

      foreach($result as $value)
      {
     
        foreach ($value as $item) { 
          // SESSION["message"] = "Page updated.";
          $output="<li><button class=\"btn btn-default btn-xs\">";
          $output.=$item;
          //$output.="<span class=\"badge right\">25</span>";
          $output.="</button>-<a href=\"#\">View Members</a></li></br>";
          echo $output;
       }
     }
   }
    else {
      // Failure
       //  $_SESSION["message"] = "Page update failed.";
         //echo "failer";
       }
}
else echo ("oh no");
?>