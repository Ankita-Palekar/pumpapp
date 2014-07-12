
<?php require_once('pusher/examples/php/lib/squeeks-Pusher-PHP/lib/Pusher.php'); ?>
<?php $app_key = "e8409a3db150a565692f";
$app_secret = "1d45f72a26bbde8cbb12";
$app_id = "80222";

$pusher = new Pusher($app_key, $app_secret, $app_id);
$data = array('message' => 'You have a new Notification!');
$pusher->trigger('my_notifications', 'notification', $data);

?>
