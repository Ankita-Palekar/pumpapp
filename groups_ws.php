
<?php require_once("db_connection2.php");
      $userid=2;
 ?>
<?php
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
      redirect_to($link1);

    } else {
      $message = "There were some errors.";
    }
  } else {
    $username = "";
    $message = "Please log in.";
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
  color:grey;
;
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
            <li ><a href="index.html">List</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li class="active"><a href="groups.html">My Groups</a></li>
            <li><a href="archive.html">Archive</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Sent Items</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Trash!</a></li>
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
  <div class="col-sm-2">
    <div class="sidebar-nav">
      <div class="navbar navbar-inverse" role="navigation">
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <?php require_once("get_groups.php") ?>
             <li><a href="create_groups_ws.php">Create Group <span class="glyphicon glyphicon-plus right"></span</a></li>
             </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <!-- <div class="col-sm-9 well">
   <p> The various groups you are a part of are here.</p>
  </div> -->
</div> 


<div id='create' class="col-sm-9 well">
  <h4 class='hh'>CREATE YOUR GROUP:</h4>
<form action="creategroup.php" method="post">
    <div class="form-group">
        <!-- <label>Group Name</label> -->
        <input type="text" class="form-control fg" name="grp_name" id="inputEmail" placeholder="Name of group">
    </div>
   <div class="form-group">
       <!--  <label>Group</label> -->
        <input type="text" class="form-control fg" name="users" id="inputEmail" placeholder="Users">
    </div>
    <!-- <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div> -->
   <!--  <button type="submit" class="btn btn-primary am">Add Member</button> -->
    <button type="submit" name="create" class="btn btn-primary cr">Create</button>
</form>
</div>
<div id="assets">
    <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$("li").click(function(){
    $(this).siblings(".active").removeClass("active");
    $(this).addClass("active");
});

</script>
</div>
</body>
</html>
