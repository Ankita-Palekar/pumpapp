<?php 

 // echo $_POST["tags"];

$link_url=urldecode($_POST["url"]);
$tags=$_POST["tags"];

$url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/addLinkPumpApp;userID=1;linkURL=";
$url.=$link;
$url.=";tags=";
$url.=$_POST["tags"];
$url.=";";

// <script type="text/javascript">

// var url="<?php echo $url;";
//   $.ajax({                                                                                                                                                                                                        
//     type: 'GET',                                                                                                                                                                                                 
//     url: url,                                                                                                                                              
//     dataType: 'jsonp',                                                                                                                                                                                                
//     success: function() { console.log('Success!');
//      },                                                                                                                                                                                       
//     error: function() { console.log('Uh Oh!'); }                                                                                                                           
// })
// </script>
// <html>
$fp = fopen("$url", "r");

?>