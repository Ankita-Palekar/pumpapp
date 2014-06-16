<?php 
if(isset($_POST("sin"))){

echo "login";

}



 ?>

 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
  <title>PUMP!- Share your URLs-Sign In</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<style type="text/css">


</head>
<body>
<heading >
<h1>PUMP!</br><small>
Share your URLs</small></h1>
</heading>
<section>
<div class="container">

      <form action="login.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Email address" name="user">
        <input type="password" class="input-block-level" placeholder="Password" name="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <!-- <button class="btn btn-default btn-primary" type="submit">Sign In</button>
      <button class="btn btn-default btn-primary a1" type="submit">Sign Up</button>
      <button class="btn btn-default btn-primary a2" type="submit">Sign Up with Facebook</button> -->

      <div class="btn-group">
    <input type="submit" class="btn a2 btn-default btn-primary" name="sin">Sign In</button>
    <button type="button" class="btn a2 btn-default btn-primary" name="sup">Sign Up</button>
   
</div>
       <button type="button" class="btn btn-default a1 btn-primary"><span class="glyphicon glyphicon-user">   </span>Sign Up with Facebook</button>
      </form>

    </div>



</section>



<div id="assets">

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</div>
</body>
</html>
