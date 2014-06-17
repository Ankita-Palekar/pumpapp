<?php 
require_once("db_connection.php");
$user_id=2;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<title>Pump!- Share your URLs</title><!-- 
	<link rel="stylesheet" type="text/css" href="styleSheet.css">
 --><link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/jasny-bootstrap.min.css">
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
.information{
    width: 800px;
float: left;
padding-top: 10px;
}
#profilePic{
    padding-left: 20px;
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
            <li ><a href="index.html">List</a></li>
            <li class="active"><a href="profile.html">Profile</a></li>
            <li ><a href="groups.html">My Groups</a></li>
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


<div class="container">
   
        <div class="col-xs-3">

<div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    <img src="back.jpg" alt="Profile Pic">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
  <div>
    <span class="btn btn-success btn-file"><span class="fileinput-new">Select image</span>
    <span class="fileinput-exists">Change</span><input type="file" name="..."></span>
    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>


</div>

<div class="information">
<dl class="dl-horizontal well">
  <dt id="email">E-mail ID:</dt>
  <dd id="mail_id">
  	<?php
		
  		if(empty($errors)){
  			$query="select emailId from users where user_id=";
  			$query.="'$user_id'";
  			$result = mysqli_query($connection, $query);
  			// $output="<p>";
  			if($result){

  				foreach($result as $item){
  					foreach($item as $value)
  					{
  						$output= "$value";
  					}
  				}
  			
  			}
  			// $output="/p";
  			echo $output;
  		}else
  		{
  			echo("Oh no!");
  		}
  ?></dd>
</br>


<p id="groupPart"><strong>Groups you are a part Of:</strong></dt>
<div class="bs-example">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Group Name</th>
          <th>Created By</th>
          <th>Number Of Members</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php $i=1; echo $i++;?></td>
          <td><?php
          	if(empty($errors)){
          		$query="select group_name from groups where groups_id in ";
  			$query.="(select grp_id from group_members where user_id=";
  			$query.="'$user_id')";
  			$result = mysqli_query($connection, $query);
  			// $output="<p>";
  			if($result){
  				foreach($result as $item){
  					foreach($item as $value)
  					{
  						$output= "$value";
  					}
  				}
  				}
  			// $output="/p";
  			echo $output;
  				}else
  					{
  					echo("Oh no!");
  					}
			?>
          </td>
          <td>
          	<?php
          	if(empty($errors)){//make group_id a variable so as to access
          		$query="select emailId from users where groups_id in ";
  			$query.="(select grp_id from group_members where user_id=";
  			$query.="'$user_id')";
  			$result = mysqli_query($connection, $query);
  			// $output="<p>";
  			if($result){
  				foreach($result as $item){
  					foreach($item as $value)
  					{
  						$output= "$value";
  					}
  				}
  				}
  			// $output="/p";
  			echo $output;
  				}else
  					{
  					echo("Oh no!");
  					}
			?>















          </td>
          <td>2</td>
        </tr>
        <tr>
          <td><?php echo $i++;?></td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
</dl>


</div>
</div>




<div id="assets">
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>

</div>
</body>
</html>