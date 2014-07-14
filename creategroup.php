
<?php require_once("db_connection2.php");
 require_once("session.php");
    require_once("functions.php");
      // include("included_functions.php");
     // if (isset($_GET)) {
     //        $userid=$_GET["user_id"];
     //      }  else{
     //        echo "USER AUTHENTICATION FAILED!!!";
     //      }   
 ?>
 <?php confirm_logged_in(); ?>
 <?php include("sessiontodata.php"); ?>
<?php
    $userid=$ID;
  // require_once("included_functions.php");
  





  if (isset($_POST['create'])) {
    // form was submitted
    $groupname = $_POST["grp_name"];
    $users = $_POST["users"];
     //auto-increment group-id;
    $admin_id=$userid;
    if (isset($_POST['create'])) {
      // successful login
      $queryi = "INSERT INTO groups (group_name,Admin_id) VALUES (";
      $queryi .= " '{$groupname}',{$admin_id} )";
      $result_set=mysqli_query($connection,$queryi);
      $link1 =  "groups.php" . "?id=" . urlencode($admin_id);
      //redirect_to($link1);

    } else {
      $message = "There were some errors.";
    }
  } 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Pump!- Create Group</title>
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

  margin-left: 200px;
  border-radius: 5px;
  /*position: relative;
  top:-300px;
  left: 550px;*/
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

         <label for="tags">Tags (press ENTER/RETURN key after entering tags)</label></br>
         <input type="text" name="tags" class="form-control fg" value="" data-role="tagsinput" placeholder="Press enter after each tag to add more"/>
    
        <button type="submit" name="create" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </br> </form>
      </div>
     

      </div>
    </div>
  </div>



</div></li>
            <li ><a href="index.php">List</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li class="active"><a href="createGroup.php">My Groups</a></li>
            <li><a href="archive.php">Favourites</a></li>
            <li><a href="indiv_share.php">My Shares</a></li>
          
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





  <div class="col-sm-2">
    <div class="sidebar-nav">
      <div class="navbar navbar-inverse" role="navigation">
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            
            <?php

  if (empty($errors)) {
    
    // Perform Update

    $query="select * from groups G, group_members M WHERE G.groups_id=M.grp_id AND M.user_id={$userid}";
    // $query.="WHERE ";
   // echo $query;
    $result = mysqli_query($connection, $query);

    if ($result) {
        while ($groupname=mysqli_fetch_assoc($result)) {
      ?>
        <?php  
               $grpid=$groupname["groups_id"];
               $cur_url="groupnum.php?";
               $cur_url.="groups_id={$grpid}";
               // $cur_url.="&user_id={$userid}";
         ?>
        <li class="grpname"><a href="<?php echo $cur_url ?>"><?php echo $groupname["group_name"]; ?> </a></li>

        <?php } 
     
   }
    
}
else echo ("oh no");
?>
             <li class="active"><a href="#">Create Group <span class="glyphicon glyphicon-plus right"></span></a></li>
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
<form action="createGroup.php" method="post">
    <div class="form-group">
        <!-- <label>Group Name</label> -->
        <input type="text" class="form-control fg" name="grp_name" id="inputEmail" placeholder="Name of group">
    </div>
   <div class="form-group">
       <!--  <label>Group</label> -->
        <input type="text" class="form-control fg" name="users" id="inputEmail" placeholder="Users">
    </div>
    <!-- <div class="ui-widget">
  <label for="friends"><h4>Search For Friends: </h4></label></br>
  <input class="form-control fg" id="friends" size="50">
</div>   //To insert autocomplete -->
    <button type="submit" name="creategrp" class="btn btn-primary cr">Create</button>
</form>
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
if(isset($_POST["creategrp"])){
$grp_name=$_POST["grp_name"];
$users=$_POST["users"];
$url="http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=createGroup";
$url.="&groupName=";
$url.="{$grp_name}";
$url.="&AdminID=";
$url.="{$ID}";
$url.="&UserIDs=";
$url.=$_POST["users"];

};

?>
<script type="text/javascript">
<?php if(isset($_POST["create"])){?> 

$("document").ready(function(){
  
var url="<?php echo $url; ?>";
alert(url);
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

// $.ajax({
//   type: 'GET',
//  url: "/Extension%201%20-%20Copy/get_friends.php",
// success:function(data){
//   var items=data;
//   var myFriends=jQuery.parseJSON(items);
//  $(function() {
//     var availableTags = myFriends;
//     function split( val ) {
//       return val.split( /,\s*/ );
//     }
//     function extractLast( term ) {
//       return split( term ).pop();
//     }
//     $( "#friends" )
//       // don't navigate away from the field on tab when selecting an item
//       .bind( "keydown", function( event ) {
//         if ( event.keyCode === $.ui.keyCode.TAB &&
//             $( this ).autocomplete( "instance" ).menu.active ) {
//           event.preventDefault();
//         }
//       })
//       .autocomplete({
//         minLength: 1,
//         source: function( request, response ) {
//           // delegate back to autocomplete, but extract the last term
//           response( $.ui.autocomplete.filter(
//             availableTags, extractLast( request.term ) ) );
//         },
//         focus: function() {
//           // prevent value inserted on focus
//           return false;
//         },
//         select: function( event, ui ) {
//           var terms = split( this.value );
//           // remove the current input
//           terms.pop();
//           // add the selected item
//           terms.push( ui.item.value );
//           // add placeholder to get the comma-and-space at the end
//           terms.push( "" );
//           this.value = terms.join( ", " );
//           return false;
//         }
//       });
//   });
// }
// }); to insert autocomplete

$(".share_modal li").click(function(){
  $(this).html("<span class=\"label label-success\">Successfully Shared!</span>      <a href=\"index.php\">View Links</a>"); 
})
</script>
</body>
</html>
