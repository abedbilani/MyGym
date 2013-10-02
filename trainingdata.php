<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Open-Air
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120818

-->
<html xmlns="http://www.w3.org/1999/xhtml"/>

<html>
    <head>
        <title> MyGym</title>
        <div style="position :absolute;top:20px;left:40px">
            <p><h2>MY<br/> 
                    GYM 
                    <br/></h2></p></div>
        <div style="position: absolute ;left: 180px; top: 20px;"><img  src="images\header2.jpg" height="200" width="750"
                                                                        />
         <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         

            <link href="style.css" rel="stylesheet" type="text/css" media="screen" /></div>
<?php

session_start();
include 'mygymdbConnect.php';
$user = $_POST['clts'];
$wrkout1 = $_POST['first'];
$wrkout2 = $_POST['second'];
$wrkout3 = $_POST['third'];

$query = "UPDATE `clt_wrkout` SET( `first`, `second`, `third`) VALUES 
    ('$wrkout1','$wrkout2','$wrkout3'WHERE WHERE=$user)";
if (!mysql_query($query)) {
    die('Error: ' . mysql_error());
}
echo '<script language="javascript">alert("Assignement succefull")</script>';
echo 'To train more Clients click <a href="training.php">here</a>';
echo 'else go <a href="home.php">Home</a>';
mysql_close($connex);

//header('Location:Home.php');
?>
