<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
  <title>PUMP!- Share your URLs-Sign In</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<style type="text/css">

    h1{ text-align: center;
  margin-top: 0;
  padding-top:10px;
  padding-bottom: 8px;
  border-bottom: 2px solid gray;
  color: white;

}
      body{
      	text-align: center;
      background-image: url('edit.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      opacity: 0.9;
      

    }


      .form-signin { 
        width: 350px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
      }
     
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="email"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .container{
        position: relative;
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
<div class="container">
      <form method=POST action="login.php" class="form-signin">
        <h2 class="form-signin-heading">Sign In!</h2></br>
        <label for="emailID">E-mail ID:</label>
        <input type="email" name ="emailID" placeholder="Email address" required></br>
        <label for="password">Password:</label>
        <input type="password" name="password"  placeholder="Password" required></br></br>
		<button type="submit" name="submit" id="sign_in" class="btn a2 btn-default btn-primary">Sign In</button>
	 <button id="home" class="btn btn-danger" onclick="location.href='welcome.php'">Home Page</button>
    
        </form>

    </div>


</section>




<div id="assets">

<?php
	if(isset($_POST["submit"])){
$id=$_POST["emailID"];
$pw=$_POST["password"];

$url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/LoginAuthPumpApp;userEmail=";
$url.=$id;
$url.=";password=";
$url.=$pw;
$url.=";";

//echo $url;
}
?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$("#sign_up").click(function(){
  window.location.href="http://localhost/pumpapp/signUp.php";
});
</script>
<script type="text/javascript">
<?php if(isset($_POST["submit"])){?> 


var url="<?php echo $url; ?>";

$("document").ready(function(){
	

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
</div>
</body>
</html>
