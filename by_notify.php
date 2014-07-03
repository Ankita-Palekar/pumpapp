<?php require_once("db_connection2.php"); 

if(isset($_GET)){
  $userid=$_GET["user_id"];
}else{
  $userid=2;
}
?>
<html>
<head></head>
<body>

<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
 

<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select * from share_link SL, links L, share S, Groups G ";
    $query .="WHERE  SL.visited=1 AND L.link_id=S.link_id AND S.share_id=SL.share_id AND S.sharrer_id={$userid} ";
    $query .="AND S.group_id=G.groups_id ";
    $output="<ul>";
    $result = mysqli_query($connection, $query);
    
     
    if ($result) {

       while ($viewed=mysqli_fetch_row($result)) {
         ?>
<pre>
        <?php 
       // print_r($viewed); ?>
</pre>
         <?php
      $output.="<li class=\"list-group-item list-group-item-success\"> Your Link ";
       $output.=$viewed["5"];
      $output.="  has been viewed by ";
      $output.=$viewed["2"];
      $output.="  from the group ";
      $output.=$viewed["14"];

      $output.="</li>";
        }
       
        
        }else{

            $output="nothing is coming";
        }
        $output .="</ul>";
      echo $output; 
      // echo $query; 
      
}
?>
</body>
</html>
