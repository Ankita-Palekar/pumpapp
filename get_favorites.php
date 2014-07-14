
<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select link_id, link_url from links where fav=1 AND user_id={$user_id} ";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
  
  $fav=0;
$output="";
      foreach($result as $value)
      {
       
     
        foreach ($value as $item_key=>$item) {  
      if(is_numeric($item)){
           $output.=" <div class=\"col-sm-3 col-sm-3\">
    <div  class=\"thumbnail\" data-linkid=";     
      $output.="$item";
          $output.=">";
           $output.="<div class=\"caption\" >";
       
}
     else{
       $safe_url=urlencode($item);

           
          $output.= "<div class=\"crop\">";
        $output.= "<img src=\"https://api.thumbalizr.com/?url=";
        $output.=$safe_url;
        $output.="&width=800\">";
        $output.="</div>";
       //    $html=getHTML($item,10);
       //    preg_match("/<title>(.*)<\/title>/i", $html, $match);
       //    $title = $match["1"]; 
       //    $output.=$title;
    
        // $output.="</button>";
     
     
        $output.="<p>
      <button type=\"button\"  class=\"btn btn-default star\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Make Favorite\">
        <span class=\"glyphicon glyphicon-ok\">
        </span>
      </button>";
        
      $output.="<button class=\"btn btn-default share\" data-toggle=\"modal\" title=\"Share\" data-target=\".share_modal\">
        <span class=\"glyphicon glyphicon-share\">
       </span>
      </button>
      <button class=\"btn btn-default tag\" data-toggle=\"modal\" title=\"Share\" data-target=\".tag_modal\">
        <span class=\"glyphicon glyphicon-tag\">
       </span>
      </button>
     
 <button type=\"button\"   class=\" btn btn-default trash\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete from List\">
        <span class=\"glyphicon glyphicon-trash\">
        </span>
      </button></p>";
        $output.="</div>";
        $output.="</div>";
        $output.="</div>";

    
        
          }

        $output.="</div>";
      }
 }
        }
        else
        {
         $output= "You have not saved any links yet.";
        }

        echo $output;

           require_once("share_modal.php"); 
           require_once("tags_modal.php");
       } else {
        
         echo "failer";
       }
  
  

?>


