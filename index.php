<?php
    require_once("session.php");
    require_once("functions.php");
    require_once("db_connection2.php");
 ?>
 <?php include("sessiontodata.php"); ?>
<?php
 confirm_logged_in();
 ?>

<?php $user_id=$ID; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<title>Pump!- Share your URLs</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-tagsinput.css">
<style type="text/css">


body{
	background: url("waves.jpg");
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

         <label for="tags">Tags (press ENTER/RETURN key after entering tags)</label></br>
         <input type="text" name="tags" class="form-control fg" value="" data-role="tagsinput" placeholder="Press enter after each tag to add more"/>
    
        <button type="submit" name="create" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </form>
      </div>
     

      </div>
    </div>
  </div>



</div></li>
            <li class="active"><a href="index.php ?>">List</a></li>
            <li><a href="profile.php ?>">Profile</a></li>
            <li><a href="groups_ws2.php ?>">My Groups</a></li>
            <li><a href="archive.php">Favourites</a></li>
           
        </ul>
        


        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">LogOut</a></li>
        </ul>
        <form role="search" class="navbar-form navbar-right">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="shared_with_me.php"><span class="glyphicon glyphicon-import"></span><span class="badge">with</span></a>
        </li>
        <li><a href="shared_by_me.php"><span class="glyphicon glyphicon-export"></span><span class="badge">by</span></a>
        </li>

        </ul>
    </div>
</nav>



<?php require_once("get_links.php");?>


<div id="assets">
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="assets/cookie/jquery.cookie.js"></script>
<script type="text/javascript">

$(".trash").click(function(){
var r=confirm("Are you sure you want to delete this?");
if(r==true){
var link_id=$(this).parent().parent().attr("data-linkid");
$.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp-master/delete_item.php" ,
  data: {lid: link_id },
  //dataType:'jsonp'
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
  var linkid=$(this).parent().parent().attr("data-linkid");
  $(this).toggleClass("star").toggleClass("ok");
if($(this).hasClass("star")){
   $(this).html("<span class=\"glyphicon glyphicon-star\"></span>");
   $.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp-master/delete_fav.php" ,
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
  url:"http://localhost/pumpapp-master/save_fav.php" ,
  data: {lid: linkid},
  success:function(data){
    console.log(data);
     }
})
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
  url:"http://localhost/pumpapp-master/delete_fav.php" ,
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
  url:"http://localhost/pumpapp-master/save_fav.php" ,
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
$url="http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=addLinkPumpApp&userID={$user_id}&linkURL=";
$url.=$link;
$url.="&tags=";
$url.=$tags;

};
?>
<script type="text/javascript">

<?php if(isset($_POST["create"])){?> 


  
var url="<?php echo $url; ?>";

 var xhr = new XMLHttpRequest();
xhr.open('GET',url);
xhr.onreadystatechange = function () {
 if (this.status == 200 && this.readyState == 4) {
   console.log('response: ' + this.responseText);
   
 }
};
xhr.send();


<?php } ?>

</script>
<script type="text/javascript">

$(".tag").click(function(){
var id=$(this).parent().parent().attr("data-linkid");
$.ajax({
  type: 'GET',
  url:"http://localhost/pumpapp-master/get_tags.php" ,
  data: {id: id},
  success:function(data){
    $("input").val(data);
    $("#save_tags_modal").click(function(){
      $("input").val(" ");
    });
   },
      error:function(){
        alert("Sorry, could not retreive tags");
      }
})
});
var user="<?php echo $user_id; ?>";
$.cookie("user",user);
</script>
<script src="share_link.js"></script>
<script src="assets/bootstrap-tagsinput.min.js" type="text/javascript"></script>
</div>
</body>
</html>
