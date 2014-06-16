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

<?php include("nav.html");
?>

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
  <dt id="profileTagName">Name</dt>
  <dd id="profileName">Name Of The person</dd>
  <dt id="empOrg">Organisation</dt>
  <dd id="organisation">Organisation Of The person</dd>
  <dt id="empRole">Role</dt>
  <dd id="Role">Role Of the Person</dd>
<dt id="empDes">Designation</dt>
  <dd id="designation">Designation Of The person</dd></br>
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
          <td>1</td>
          <td>Software Developers</td>
          <td>Ankit</td>
          <td>2</td>
        </tr>
        <tr>
          <td>2</td>
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
