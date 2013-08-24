<?php
include ('mygymdbConnect.php');
$cart_id=$_POST['id'];
 
$result=mysql_qmysql_query("select ` clt_days ` from `clt_subscription ` where `card_id`='$cart_id' ");
while ($row=  mysql_fetch_array($result))
{
     $day=$row['clt_days'];
}
if ($day>=1){
    $day=$day-1; 
    $query=" 
        update `clt_subscription` 
        set clt_days=`$day` 
        where `card_id`=`$cart_id`et clt_days=`$day`";

if (!mysql_query($query,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo "<script language='javascsript'> alert('your Training was successful !!')</script>";

  mysql_close($connex);
  header('Home.php');
  }
else
    echo 'You are out of training days please buy more days';

?>
