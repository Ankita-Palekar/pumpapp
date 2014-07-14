<?php
    require_once("session.php");
    require_once("functions.php");
    require_once("db_connection2.php");
 ?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
  <title>PUMP!-Sign In</title>
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
  $query2 = "SELECT * FROM  users ";
   $query2 .="WHERE emailId='{$id}' LIMIT 1";
    $result2= mysqli_query($connection, $query2);
    confirm_query($result2);
    if ($usid=mysqli_fetch_assoc($result2)) {
      $userid=$usid["user_id"];
    
  
     $_SESSION["emailId"]=$id;
     $_SESSION["user_id"]=$userid;
     // $_SESSION["user_id"]=$admin2["0"];
 //      $url="createGroup.php?user_id=";
 //      $url.=$admin2["0"];
 //      redirect_to($url);
                
$url="http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=LoginAuthPumpApp&userEmail=";
$url.=urlencode($id);
$url.="&password=";
$url.=urlencode($pw);

}}

?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
<?php if(isset($_POST["submit"])){?> 


var url="<?php echo $url; ?>";

$("document").ready(function(){
  console.log("this is");

 
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.onreadystatechange = function () {
    if (this.status == 200 && this.readyState == 4) {
      window.location.href="index.php";
      console.log('response: ' + this.responseText);
 }
};
xhr.send();






});
<?php } ?>
</script>
</div>
</body>
</html>
