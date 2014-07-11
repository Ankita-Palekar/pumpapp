<?php require_once("db_connection2.php"); 
 require_once("session.php");
 require_once("functions.php");
?>
<?php include("sessiontodata.php"); ?>
<?php confirm_logged_in(); ?>
<?php 
$output="";
   if (empty($errors)) {
    // Perform Update
    if (isset($_GET["groups_id"])){
      $grp_id=$_GET["groups_id"];
      $userid=$ID;
      }
    $query="select * from group_members M, users U ";
    $query.="WHERE M.grp_id={$grp_id} AND U.user_id=M.user_id";
    
    $resultm = mysqli_query($connection, $query);
    $querylink="select * from share S, links L ";
    $querylink.="where group_id={$grp_id} AND S.link_id=L.link_id";
    $resultlink=mysqli_query($connection, $querylink);
}
 ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Pump!- Share your URLs</title>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<style type="text/css">

@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

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
#create input[type=button]:focus{
  outline: none;
}

#create button{
  width: 250px;
  height: 35px;
  
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 5px;
  color: white;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
  margin-left: 10px;
  margin-bottom: 5px;
}
.right{
    float: right;
}
.hh{
  margin-left: 25px;
  color:gray;

font-family: 'Exo', sans-serif;
font-weight: bold;
}
#create input[type=text]{
  width: 250px;
  height: 30px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: white;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  margin-left: 10px;
  margin-top: 10px;
  padding: 4px;
}

#create label{
  margin-left: 10px;
  color: white;
}

#create{
 /* border:1px solid rgba(255,255,255,0.6);*/
  width: 300px;

  
  border-radius: 5px;
  position: relative;
  top:-300px;
  left: 550px;
  height: 250px;


}
.sidebar-nav{
  margin-left: 10px;
}
/*.well{
    background: rgba(20, 20, 15, 0.9);
    opacity: 0.95;
}*/
.fg {
   -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
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
            <li ><a href="index.php">List</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li class="active"><a href="groups_ws2.php">My Groups</a></li>
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
  <div class="row">
  <div class="col-sm-2">
    <div class="sidebar-nav">
      <div class="navbar navbar-inverse" role="navigation">
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            
            <?php

            if (empty($errors)) {

    $query="select * from groups G, group_members M ";
    $query.="WHERE G.groups_id = M.grp_id ";
    $query.="AND M.user_id={$userid}";
   
    $result = mysqli_query($connection, $query);

    if ($result) {
        while ($groupname=mysqli_fetch_assoc($result)) {
      ?>
        <?php  
               $grpid=$groupname["groups_id"];
               $cur_url="groupnum.php?";
               $cur_url.="groups_id={$grpid}";
               $cur_url.="&user_id={$userid}";
         ?>
        <li class="grpname"><a href="<?php echo $cur_url ?>"><?php echo $groupname["group_name"]; ?> </a></li>

        <?php } 
   }
}
else echo ("oh no");
?>
             <li><a href="groups_ws2.php">Create Group <span class="glyphicon glyphicon-plus right"></span></a></li>
             </ul>
        </div>
      </div></div></div>
    
<div class="col-sm-8">
    <nav role="navigation" class="navbar navbar-inverse">
  <div class="tabbable">

  
    <ul class="nav nav-tabs">
      <li class="active"><a href="#mem" data-toggle="tab">MEMBERS</a></li>
      <li><a href="#linkdiv" data-toggle="tab">LINKS shared</a></li>
      
    </ul>
    </div>
</nav>
<div class="tab-content">
  <div class="tab-pane active" id="mem">
    
             <ul class=" well">
     
         <?php
      
        while($member = mysqli_fetch_row($resultm)) {
        
        ?>
  
        <li class="members"><?php echo $member[5].",   ".$member[4]; ?></li>
       <?php
         }
        ?>
      </ul>
      
      </div>
 <div class="tab-pane" id="linkdiv">
     <ul class="linkclass well">
    <?php 
      
      while ($link=mysqli_fetch_row($resultlink)) {
     ?>
        <li><a href=" <?php echo $link[7]; ?>"> <?php echo $link[7]; ?> </a></li>
     <?php 
      }
     ?>
    </ul>
  </div>

 
   
</div> 
</div>
</div>
  
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
<?php
  // 4. Release returned data
  mysqli_free_result($resultm);
  mysqli_free_result($resultlink);
?>

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
$(".share_modal li").click(function(){
  $(this).html("<span class=\"label label-success\">Successfully Shared!</span>      <a href=\"index.php\">View Links</a>");
});


</script>

</body>
</html>
<?php
  // 5. Close database connection
  if (isset($connection)) {
    mysqli_close($connection);
  }
?>
