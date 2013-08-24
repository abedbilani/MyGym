<?php
include ('mygymdbConnect.php');
$subsc=$_POST['subscriptype'];
$user=$_SESSION['clt_days'];
$card=$_POST['card_id'];
echo "$subsc";
//$query="INSERT INTO `clt_subscription`(`card_id`, `clt_join_date`, `clt_days`, `clt_subscriptionType_id`) VALUES 
  //  ($card,curdate(),$subsc,[value-4])";


?>
