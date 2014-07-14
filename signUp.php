<?php require_once("db_connection2.php"); ?>
<!-- <!DOCTYPE html> -->
<html>
<head>
<meta charset="utf-8"/>
  <title>PUMP!- Sign Up</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<style type="text/css">

    h1{ text-align: center;
  margin-top: 0;
  padding-top:10px;
  padding-bottom: 8px;
  border-bottom: 2px solid gray;


}
      body{
        background-color: #f5f5f5;
      
      background-image: url('waves.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      opacity: 0.9;
      

    }

      .col{
      color: white;
    }
   
      .form-signin { 
        width: 450px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        /*background-color: #fff;*/
        /*border: 1px solid #000;*/
       
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="email"],
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .form-signin input[type="text"]{
        margin-left: 25px;
      }
      .well{
        margin-top: 50px;
        margin-left: 375px;
        text-align: center;
        width: 600px;
        border: 1px solid black;
      }
     
      h1{
        font-family: 'Exo', sans-serif;
      }
    </style>

</head>
<body>
<heading >
<h1>PUMP!</br><small>
Share your URLs</small></h1>
</heading>
<section>
<div class="well">
      <form method="POST" action="signUp.php" class="form-signin">
        <h2 class="form-signin-heading">Sign Up!</h2>
        <label for="emailID">E-mail ID:</label>
        <input type="email" name ="emailID" placeholder="Email address" required></br>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="Name"></br>
        <label for="password">Password:</label>
        <input type="password" name="password"  placeholder="Password" required></br></br>
          <button type="submit" name="submit" id="sign_up" class="btn a2 btn-default btn-success">Sign Up</button>
     <button id="home" class="btn btn-danger" onclick="location.href='index.html'">Home Page</button>
        </form>

    </div>


</section>



<div id="assets">

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</div>
<?php
if(isset($_POST["submit"]))
{
$id=$_POST["emailID"];
$pw=$_POST["password"];
$nm=$_POST["name"];

 $url="http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=signUpPumpApp&emailID=";
 $url.=urlencode($id);
 $url.="&password=";
 $url.=urlencode($pw);
 $url.="&username=";
 $url.=urlencode($nm);
}

?>
<script type="text/javascript">
<?php if(isset($_POST["submit"])){?> 


var url="<?php echo $url; ?>";

$("document").ready(function(){
  

  $.ajax({                                                                                                                                                                                                        
    type: 'GET',                                                                                                                                                                                                 
    url: url,                                                                                                                                              
    dataType: 'jsonp',                                                                                                                                                                                                
    success: function() { console.log('Success!');
      window.location.href="profile.php";
     },                                                                                                                                                                                       
    error: function() { console.log('Uh Oh!'); 
      window.location.href="profile.php";}                                                                                                                           
})


});
<?php } ?>

</script>


</body>
</html>

</html>