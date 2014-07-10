<?php require_once("db_connection2.php"); 
 require_once("session.php");
 ?>

 <?php 
 session_destroy();
 header("location:welcome.php");
exit(); ?>
