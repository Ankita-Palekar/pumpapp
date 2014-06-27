<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<title>Pump!- Share your URLs</title><!-- 
	<link rel="stylesheet" type="text/css" href="styleSheet.css">
 --><link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-tagsinput.css">
<style type="text/css">


body{
	background: url("bluebg.jpg");
  /*background-color: #D4D4D4;*/
}

h1{
	text-align: center;
border: 2px solid black;
background-color: white;
width: 400px;
margin-left: 450px;
opacity: 0.7;
}

.nav{
	padding-left: 10px;
	padding-right: 10px;
}
.thumbnail{
  margin-left: 10px;
	text-align: center;
}
.pageContent{
	border-bottom: 2px solid gray;
}

.myData{
  padding-left: 200px;
}
.crop {
    width: 250px;
    height: 250px;
    overflow: hidden;
}

.crop img {
    width: 500px;
    height: 500px;
    margin: 0px 0 -40px -60px;
}


</style>



</head>
<body>



 <heading>

  <div class="row">

<h1>Pump!</br><small>Share your URLs</small></h1>
</div></heading>



<nav role="navigation" class="navbar navbar-inverse">

    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>  <div class="col-md-6">
     <button class="btn btn-default plus-sign" data-toggle="modal" title="Add new link" data-target=".add_url_modal">
        <span class="glyphicon glyphicon-plus-sign">
       </span>
      </button>


<div class="modal fade add_url_modal" tabindex="+1" role="dialog" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Save your URL</h4>
      </div>
      <div class="modal-body">
        
     <form action="index.php" method=POST>
    
        <label for="link_url">Put URL here:</label>
        <input type="text" class="form-control fg" name="link_url" id="inputURL" placeholder="URL link" required>

         <label for="tags">Tags</label></br>
         <input type="text" name="tags" class="form-control fg" value="" data-role="tagsinput" placeholder="Press enter after each tag to add more"/>
    
        <button type="submit" name="create" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </form>
      </div>
     

      </div>
    </div>
  </div>



</div></li>
            <li class="active"><a href="index.php">List</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="groups_ws.php">My Groups</a></li>
            <li><a href="archive.php">Archive</a></li>
           
        </ul>
        


        <ul class="nav navbar-nav navbar-right">
            <li><a href="welcome.php">LogOut</a></li>
        </ul>
        <form role="search" class="navbar-form navbar-right">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </form>
    </div>
</nav>



<?php require_once("get_links.php");?>

<!-- 
</div></div> -->



<div id="assets">
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(".plus").click(function(){

  var sec=$(this).parent().parent().parent().remove();
 

});

$(".trash").click(function(){

  var removal=$(this).parent().parent().parent();
  removal.remove();

//$(".col-sm-3").animate({  marginRight : "-=180px"}, 500,"linear");

});

</script>
<?php
if(isset($_POST["create"])){
  echo $_POST["tags"];
$link=urlencode($_POST["link_url"]);
$tags=$_POST["tags"];
$url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/addLinkPumpApp;userID=1;linkURL=";
$url.=$link;
$url.=";tags=";
$url.=$_POST["tags"];
$url.=";";
};
?>
<script type="text/javascript">

<?php if(isset($_POST["create"])){?> 


  
var url="<?php echo $url; ?>";
  $.ajax({                                                                                                                                                                                                        
    type: 'GET',                                                                                                                                                                                                 
    url: url,                                                                                                                                              
  dataType: 'jsonp',                                                                                                                                                                                                
    success: function() { console.log('Success!');
     },                                                                                                                                                                                       
    error: function() { console.log('Uh Oh!'); }                                                                                                                           
})


<?php } ?>

</script>
<script type="text/javascript">
$(".share_modal li").click(function(){
  $(this).html("<span class=\"label label-success\">Successfully Shared!</span>      <a href=\"#\">View Links</a>");
})



</script>

</div>
</body>
</html>
