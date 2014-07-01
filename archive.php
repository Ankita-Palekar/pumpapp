<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Pump!- Share your URLs</title><!-- 
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
 --><link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
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


  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }


.right{
    float: right;
}
.thumbnail{
  margin-left: 10px;
  text-align: center;
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
<h1>Pump!</br><small>Share your URLs</small></h1>
</heading>
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
            <li><a href="index.php">List</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li ><a href="groups.html">My Groups</a></li>
            <li class="active"><a href="archive.php">Favorites</a></li>
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

        
  <div>
   <?php require_once("get_favorites.php") ?>
  </div>



<div id="assets">
    <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$("li").click(function(){
    $(this).siblings(".active").removeClass("active");
    $(this).addClass("active");
});


$(".trash").click(function(){
var r=confirm("Are you sure you want to delete this?");
if(r==true){
var link_id=$(this).parent().parent().attr("data-linkid");
$.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp/delete_item.php" ,
  data: {lid: link_id },
  success:function(data){
    console.log(data);
     }
})


$(this).parent().parent().parent().animate({
    height: "toggle"
  }, 500, function() {
  var removal=$(this).parent().parent().parent();
  removal.remove();
});
}
else{
}

});

$(".star").click(function(){
  var s=confirm("Surely remove from favorites?");
  if(s==true){
  var linkid=$(this).parent().parent().attr("data-linkid");
  $(this).toggleClass("star").toggleClass("ok");
if($(this).hasClass("star")){
   $(this).html("<span class=\"glyphicon glyphicon-star\"></span>");
   $.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp/delete_fav.php" ,
  data: {lid: linkid},
  success:function(data){
  console.log(data);
    }
})
}
else{
   $(this).html("<span class=\"glyphicon glyphicon-ok\"></span>"); 
   $.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp/save_fav.php" ,
  data: {lid: linkid},
  success:function(data){
    console.log(data);
     }
})
}
}
else{
  
}

});

$(".ok").click(function(){
var k=confirm("Surely remove from favorites?");
  if(k==true){var linkid=$(this).parent().parent().attr("data-linkid");
  $(this).toggleClass("star").toggleClass("ok");
if($(this).hasClass("star")){
   $(this).html("<span class=\"glyphicon glyphicon-star\"></span>");
   $.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp/delete_fav.php" ,
  data: {lid: linkid},
  success:function(data){
  console.log(data);
    }
})
}
else{
   $(this).html("<span class=\"glyphicon glyphicon-ok\"></span>"); 
   $.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp/save_fav.php" ,
  data: {lid: linkid},
  success:function(data){
    console.log(data);
     }
})
}}
else{
  
}


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
  $(this).html("<span class=\"label label-success\">Successfully Shared!</span>      <a href=\"index.php\">View Links</a>");
})

$(".tag").click(function(){
var id=$(this).parent().parent().attr("data-linkid");
$.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp/get_tags.php" ,
  data: {id: id},
  success:function(data){
    $("#update_tag").html(data);

      }
})
});

</script>
</div>
</body>
</html>
