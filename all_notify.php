<?php require_once("db_connection2.php"); 
 require_once("session.php");
 require_once("functions.php"); ?>
<?php include("sessiontodata.php"); ?>
<?php
 confirm_logged_in();
 ?>
<?php $userid=$ID; ?>

<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select * from share_link SL, links L, share S, Groups G, group_members M, users U  ";
    $query.="WHERE S.group_id=M.grp_id ";
    $query.="AND S.link_id=L.link_id ";
    //  AND S.link_id=L.link_id to get link_url also
    $query.=" AND U.user_id=S.sharrer_id ";
   $query.=" AND S.group_id=G.groups_id ";
   // $query .= " AND S.share_id=SL.share_id ";
    //$query.=" AND M.grp_id=G.groups_id ";
    $query.="AND M.user_id={$userid} ";
    $result = mysqli_query($connection, $query);

    if ($result) {

       while ($viewed=mysqli_fetch_assoc($result)) {

          ?>

         <?php


      $output="<li class=\"list-group-item list-group-item-success\" data-link=";
      $output.=$viewed["link_url"];
     // $output.=">click here</a>";
     $output.="> The Link has been shared by ";
      $output.=$viewed["username"];
      $output.=" on the group ";
      $output.=$viewed["group_name"];

      $output.="</li>";
        }
                $output.="</ul>";
  //echo $query;
  echo $output;
        }
      } 
        else {
        echo "oh no!";
       var_dump($errors);
       }
  
 

?>


<?php
$query2="select * from share_link SL, links L, share S, Groups G WHERE SL.visited=1 AND L.link_id=S.link_id AND S.share_id=SL.share_id AND S.sharrer_id={$userid} AND S.group_id=G.groups_id";  
 $result2 = mysqli_query($connection, $query2);
if ($result2) {

       while ($viewed2=mysqli_fetch_row($result2)) {
         ?>

         <?php
      $output2="<li class=\"list-group-item list-group-item-success\" data-link=";
      $output2.=$viewed2["5"];
       $output2.=">Your Link ";
      // $output2.=">click here</a>";
      $output2.="  has been viewed by ";
      $output2.=$viewed2["2"];
      $output2.="  from the group ";
      $output2.=$viewed2["14"];

      $output2.="</li>";
        }
       
        
       $output2.="</ul>";
  //echo $query;
  echo $output2;
        } else {
        echo "oh no!";
       }
  
 

?>
