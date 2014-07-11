<?php  ?>
<html>
<head>
	<title>VERIFY EMAIL PUMP</title>
</head>





<?php if(isset($_GET)){
	$email=$_GET["emailId"];
	$token=$_GET["token"];
} 
?>

<?php if (isset($_POST["submit"])) {

$url="http://166.62.18.107/WebServices/pumpappwebservice/REST.php?action=varifySignedUsers&emailID=";
$url.=$email;
$url.="&token=";
$url.=$token;											
} ?>





<body>
	<form action="verifier.php?emailId=<?php echo $email; ?>&token=<?php echo $token; ?>" method="POST">

<button type="submit" name="submit" id="ver"> CLICK HERE TO VERIFY</button>
</form>
<script type="text/javascript">
<?php if(isset($_POST["submit"])){?> 


  
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
</body>
</html>


