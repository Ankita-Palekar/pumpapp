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

    $query="select G.group_name, G.groups_id from groups G, group_members M where G.groups_id=M.grp_id AND M.user_id={$userid}";

    $result = mysqli_query($connection, $query);

    if ($result) {

      while($item=mysqli_fetch_array($result)){
          // SESSION["message"] = "Page updated.";
          $output="<li><button class=\"btn btn-default btn-xs\" data-gid=";
          $output.=$item["groups_id"];
          $grpid=$item["groups_id"];
          $output.=">";
          $output.=$item["group_name"];
          //$output.="<span class=\"badge right\">25</span>";
          $output.="</button>-<a href=\"groupnum.php?groups_id={$grpid}\">View members & links</a></li></br>";
          echo $output;
       }
     
   }
    else {
     alert("could not fetch groups. Please try later.");
       }
}
else echo ("oh no");
?>