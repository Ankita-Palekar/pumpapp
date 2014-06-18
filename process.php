<?php
$id=$_POST["emailID"];
$pw=$_POST["password"];

$url="http://166.62.18.107:8080/PumpAppWebsevice/REST/webService/signUpPumpApp;emailID="+$id+";password"+$pw+";";
Location: $url;
?>
