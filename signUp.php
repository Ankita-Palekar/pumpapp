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
      
      background-image: url('bg.jpg');
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
        background-color: #fff;
        border: 1px solid #e5e5e5;
       
      }
     
      
      .container{
        text-align: center;

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
      <form method=POST action="signUp.php" class="form-signin">
        <h2 class="form-signin-heading">Sign Up!</h2>
        <label for="emailID">E-mail ID:</label>
        <input type="email" name ="emailID" placeholder="Email address" required></br>
        <label for="password">Password:</label>
        <input type="password" name="password"  placeholder="Password" required></br>

        <button type="submit" name="submit" id="sign_up" class="btn a2 btn-default btn-primary">Sign Up</button>
	
        </form>

    </div>


</section>



<div id="assets">

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


</div>
<?php
if(isset($_POST["submit"])){
$id=$_POST["emailID"];
$pw=$_POST["password"];

$url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/signUpPumpApp;emailID=";
$url.=$id;
$url.=";password=";
$url.=$pw;
$url.=";";

echo $url;
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
    	$.getJSON(url, null, function () {
        alert('Cross domain JS call achieved. Have your implementation going in here!');});

     },                                                                                                                                                                                       
    error: function() { console.log('Uh Oh!'); }                                                                                                                           
})


});
<?php } ?>

</script>


</body>
</html>

</html>