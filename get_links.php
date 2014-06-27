<?php require_once("db_connection2.php"); ?>
<?php require_once("get_title.php");?>

<?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select link_url from links";

    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
  
     // $output="<ul>";



      $output=" <div class=\"row\">";
      foreach($result as $value)
      {
     
        foreach ($value as $item) { 
        //  require_once("share_modal.php");
            $safe_url=urlencode($item);
            //echo $safe_url;
           $output.=" <div class=\"col-sm-3 col-sm-3\">
    <div  class=\"thumbnail\">
      <div class=\"caption\">";
     
           // $output.= "<button type=\"button\" class=\"btn btn-default\"";
           // $output.=" id=\"$safe_url\">";
      //  $output.= "$safe_url"; 
           // $output.="<h5>";
           //  $output.= getTitle($safe_url);
           //  $output.="</h5>";
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
      
 
        $output.="<p><button type=\"button\" class=\"btn btn-default plus\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Archive this page\">
        <span class=\"glyphicon glyphicon-plus\">
        </span>
      </button>
      <button type=\"button\"  class=\"btn btn-default star\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Make Favorite\">
        <span class=\"glyphicon glyphicon-star\">
        </span>
      </button>
        
      <button class=\"btn btn-default share\" data-toggle=\"modal\" title=\"Share\" data-target=\".share_modal\">
        <span class=\"glyphicon glyphicon-share\">
       </span>
      </button>";
      
       $output.= "<button type=\"button\"   class=\"btn btn-default tag\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"edit tags\">
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
      }
        $output.="</div>";
        }
        else
        {
         $output= "You have not saved any links yet.";
        }

        echo $output;

     // $_SESSION["message"] = "Page updated.";



           require_once("share_modal.php"); 

       } else {
      // Failure
       //  $_SESSION["message"] = "Page update failed.";
         echo "failer";
       }
  
  

?>


