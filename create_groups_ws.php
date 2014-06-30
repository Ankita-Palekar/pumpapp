<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Pump!- Share your URLs</title>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-tagsinput.css">
<style type="text/css">


body{
    background: url("bg.jpg");
     background-size: cover;
      background-repeat: no-repeat;
      opacity: 0.95;

}

h1{
    text-align: center;
    color: white;

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

#create{
  text-align: center;
  width: 400px;
  margin-left: 20%;
}


.right{
    float: right;
}
.sidebar-nav{
  margin-left: 10px;
}

</style>

</head>
<body>
  <div>
 <heading>
<h1>PUMP!</br><small>Share your URLs</small></h1>

</heading>
</div>

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
            <li  class="active"><a href="groups_ws.php">My Groups</a></li>
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


<div class="row">
  <div class="col-sm-2">
    <div class="sidebar-nav">
      <div class="navbar navbar-inverse" role="navigation">
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <?php require_once("get_groups.php") ?> 
            <li class='active'><a href="create_groups_ws.php">Create Group <span class="glyphicon glyphicon-plus right"></span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <!-- <div class="col-sm-9 well">
   <p> The various groups you are a part of are here.</p>
  </div> -->



<div id='create' class="col-sm-9 well">
  <h4 class='hh'>CREATE YOUR GROUP:</h4>
<form action="create_groups_ws.php" method=POST>
    
        <label for="grp_name">Group Name</label>
        <input type="text" class="form-control fg" name="grp_name" id="inputEmail" placeholder="Name of group">

       <label for="users">Users</label>
      <input type="text" name="users" value="" data-role="tagsinput" placeholder="Add User E-mail id here, and press enter for next user"/>
    
    <button type="submit" name="create" class="btn btn-primary cr">Create</button>
</form>
</div>
</div>


<div id="assets">
    <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
$("li").click(function(){
    $(this).siblings(".active").removeClass("active");
    $(this).addClass("active");
});
</script>
</div>

<?php
if(isset($_POST["create"])){
$grp_name=$_POST["grp_name"];
$users=$_POST["users"];
$url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/createGroup;groupName=";
$url.=$grp_name;
$url.=";AdminID=1";
$url.=";UserIDs=";
$url.=$_POST["users"];
$url.=";";
};
?>
<script type="text/javascript">
<?php if(isset($_POST["create"])){?> 

$("document").ready(function(){
  
var url="<?php echo $url; ?>";
  $.ajax({                                                                                                                                                                                                        
    type: 'GET',                                                                                                                                                                                                 
    url: url,                                                                                                                                              
    dataType: 'jsonp',                                                                                                                                                                                                
    success: function() { console.log('Success!');
      

     },                                                                                                                                                                                       
    error: function() { console.log('Uh Oh!'); }                                                                                                                           
})


});
<?php } ?>

</script>



</body>
</html>


