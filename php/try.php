<?php function redirect_to($newlocation)
{
	header("Location: ".$newlocation);
	exit;
	//$logged_in=$_GET['logged_in'];
	if($logged_in=="1")
	{
		redirect_to("index.html");
	}
	else{
		redirect_to("profile.html");
	}
} 

redirect_to("index.html");
?>



<!DOCTYPE html>
<html>
<head></head><body>
<?php 
// $result=0;
// //echo isset($result);

// function cost(){
// 	//echo "{$result} is good";
// return 5;
// }

// echo cost();
// var_dump($result);

$link="Second page";
$id=2;
 ?>

 <a href="linked.php?id=<?php echo $id; ?>&name=Low">&lt; <?php echo $link;?></a>

<?php include("navigation.php");
?>
</body>
 </html>