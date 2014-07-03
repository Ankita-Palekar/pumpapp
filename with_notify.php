<?php require_once("db_connection.php"); 

$userid=2;

?>

<li class="list-group-item list-group-item-success">D</li>
 

<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select * from share_link SL, links L, share S, groups G, group_members M, users U  ";
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
<pre>
        <?php 
       // print_r($viewed); ?>
</pre>
         <?php


      $output="<li class=\"list-group-item list-group-item-success\"> The Link ";
      $output.=$viewed["link_url"];
     $output.=" has been shared by ";
      $output.=$viewed["username"];
      $output.=" on the group ";
      $output.=$viewed["group_name"];

      $output.="</li>";
        }
                $output.="</ul>";
  //echo $query;
  echo $output;
        }} else {
        echo "oh no!";
       }
  
 

?>
