<?php

session_start();
include 'mygymdbConnect.php';
$user = $_POST['clts'];
$wrkout1 = $_POST['first'];
$wrkout2 = $_POST['second'];
$wrkout3 = $_POST['third'];

$query = "INSERT INTO `clt_wrkout`(`user_name`, `first`, `second`, `third`) VALUES 
    ($user,$wrkout1,$wrkout2,$wrkout3)";
if (!mysql_query($query)) {
    die('Error: ' . mysql_error());
}

mysql_close($connex);
header('Location:Home.php');
?>
