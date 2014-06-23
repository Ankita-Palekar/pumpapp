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
	background: url("bg.jpg");
}

h1{
	text-align: center;

}
nav{
	padding-left: 10px;
	padding-right: 10px;
}
.row{
	padding-left: 10px;
	padding-right: 10px;
}
.thumbnail{
  float: left;
	text-align: center;
}
.pageContent{
	border-bottom: 2px solid gray;
}



</style>



</head>
<body>



 <heading>

  <div class="row">

<h1>Pump!</br><small>Share your URLs</small></h1>
</div></heading>
<div class="row">
    <div class="col-md-1">
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



</div></div>

<nav role="navigation" class="navbar navbar-inverse">

    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">List</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="groups.html">My Groups</a></li>
            <li><a href="archive.html">Archive</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Sent Items</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Trash</a></li>
                </ul>
            </li>
        </ul>
        


        <ul class="nav navbar-nav navbar-right">
            <li><a href="newLogin.html">LogOut</a></li>
        </ul>
        <form role="search" class="navbar-form navbar-right">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </form>
    </div>
</nav>


<div class="row">
  <div id="p1-imp" class="col-sm-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>Page name</h3>
    <p class="pageContent">The content of the page. For example,Images are very common in modern web design. So styling images and placing it properly on the web pages is very important for improving the user experience.Using the Bootstrap built-in classes you can easily style images such as making the round cornered or circular images, or give them effect like thumbnails.</p>
    <p>The image from thumbalizr comes here.
    </p>
  <p >
     <button type="button" class="btn btn-default plus" data-toggle="tooltip" data-placement="top" title="Archive this page">
        <span class="glyphicon glyphicon-plus">
       </span>
      </button>
      <button type="button"  class="btn btn-default star" data-toggle="tooltip" data-placement="top" title="Make Favorite">
        <span class="glyphicon glyphicon-star">
        </span>
      </button> 
      <button type="button"  class="btn btn-default share" data-toggle="tooltip" data-placement="top" title="Share with friends">
        <span class="glyphicon glyphicon-share">
        </span>
      </button>
      <button type="button"   class="btn btn-default tag" data-toggle="tooltip" data-placement="top" title="edit tags">
        <span class="glyphicon glyphicon-tag">
        </span>
      </button>
      <button type="button"   class=" btn btn-default trash" data-toggle="tooltip" data-placement="top" title="Delete from List">
        <span class="glyphicon glyphicon-trash">
        </span>
      </button>
    </p>
    </div>
    </div>
  </div>

  <div id="p2-imp" class="col-sm-3 col-sm-3">
    <div  class="thumbnail">
      <div class="caption">
        <h3>Page name</h3>
                <p class="pageContent">The content of the page. For example,Images are very common in modern web design. So styling images and placing it properly on the web pages is very important for improving the user experience.
                  Using the Bootstrap built-in classes you can easily style images such as making the round cornered or circular images, or give them effect like thumbnails.</p>
                    <p>The image from thumbalizr comes here
                         </p>
        <p><button type="button" class="btn btn-default plus" data-toggle="tooltip" data-placement="top" title="Archive this page">
        <span class="glyphicon glyphicon-plus">
        </span>
      </button>
      <button type="button"  class="btn btn-default star" data-toggle="tooltip" data-placement="top" title="Make Favorite">
        <span class="glyphicon glyphicon-star">
        </span>
      </button>
        <button type="button"  class="btn btn-default share" data-toggle="tooltip" data-placement="top" title="Share with friends">
        <span class="glyphicon glyphicon-share">
        </span>
      </button>
      <button type="button"   class="btn btn-default tag" data-toggle="tooltip" data-placement="top" title="edit tags">
        <span class="glyphicon glyphicon-tag">
        </span>
</button>
 <button type="button"   class=" btn btn-default trash" data-toggle="tooltip" data-placement="top" title="Delete from List">
        <span class="glyphicon glyphicon-trash">
        </span>
      </button></p>
      </div>
    </div>
  </div>



<div id="p3-imp" class="col-sm-3 col-sm-3">
    <div  class="thumbnail">
      <div class="caption">
        <h3>Page name</h3>
                <p class="pageContent">The content of the page. For example,Images are very common in modern web design. So styling images and placing it properly on the web pages is very important for improving the user experience.
                  Using the Bootstrap built-in classes you can easily style images such as making the round cornered or circular images, or give them effect like thumbnails.</p>
                    <p>The image from thumbalizr comes here
                         </p>
        <p><button type="button" class="btn btn-default plus" data-toggle="tooltip" data-placement="top" title="Archive this page">
        <span class="glyphicon glyphicon-plus">
        </span>
      </button>
      <button type="button"  class="btn btn-default star" data-toggle="tooltip" data-placement="top" title="Make Favorite">
        <span class="glyphicon glyphicon-star">
        </span>
      </button>
        <button type="button"  class="btn btn-default share" data-toggle="tooltip" data-placement="top" title="Share with friends">
        <span class="glyphicon glyphicon-share">
        </span>
      </button>
      <button type="button"   class="btn btn-default tag" data-toggle="tooltip" data-placement="top" title="edit tags">
        <span class="glyphicon glyphicon-tag">
        </span>
</button>
 <button type="button"   class=" btn btn-default trash" data-toggle="tooltip" data-placement="top" title="Delete from List">
        <span class="glyphicon glyphicon-trash">
        </span>
      </button></p>
      </div>
    </div>
  </div>




</div>

<section id="savedPages">
<article id="page1">

</article>

</section>

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

$(".col-sm-3").animate({  marginRight : "-=180px"}, 500,"linear");

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

</div>
</body>
</html>
