<?php

include ('mygymdbConnect.php');
$cart_id = $_POST['id'];

$result = " SELECT `clt_days`  FROM `clt_subscription` WHERE `card_id`= $cart_id ";
if (!mysql_query($result)) {
    die('ERROR' . mysql_error());
}
while ($row = mysql_fetch_array($result)) {
    $day=$row['clt_days'];
    
}

if ($day >= 1) {
    $day = $day - 1;
    $query = " 
        update `clt_subscription` 
        set `clt_days`=$day 
        where `card_id`=$cart_id";

    if (!mysql_query($query)) {
        die('Error: ' . mysql_error());
    }

    $query1 = "UPDATE `days` SET `day`=$day where`clt_card_id`=$cart_id";

    echo "<script language='javascsript'> alert('your Training was successful !!')</script>";

    mysql_close($connex);
    header('Home.php');
}
else
    echo 'You are out of training days please buy more days';
?>
