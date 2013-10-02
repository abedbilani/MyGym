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
        <div style="position: absolute ;left: 150px; top: 250px;"><img  src="images\header2.jpg" height="200" width="750"/>     
            <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         
            <div style="position: absolute ;left: 70px; top: 220px;">
                <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
                <a href="home.php" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Home |</a>
                <a href="About.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">About |</a>
                <a href="sign up.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Sign up |</a>
                <a href="Activities.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Activities |</a>
                <a href="Trainers.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Trainers |</a>
                <a href="classes.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Classes |</a>
                <a href="Training.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Train |</a>  
            </div></div>
        <div style="position:absolute;top:37%;left:35%">
            <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         

            <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <meta name="description" content="We provide free flash templates, free templates, free flash header"/>
            <meta name="keywords" content="free flash buttons, free templates, free flash header"/>
            <script type="text/javascript" src="js/swfobject.js"></script>
            <script type="text/javascript">
                var flashvars = {
                    custom_xml_url: "custom.xml"
                };
                var params = {
                    bgcolor: "#FFFFFF",
                    scale: "noScale"
                };
                var attributes = {};
                swfobject.embedSWF("flash/header.swf", "free-flash-header", "540", "150", "9.0.0", "flash/expressInstall.swf", flashvars, params, attributes);
            </script>

    </head>
    <body>
        <div style="position: absolute;top: -200px;left: -50px">
            <!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->

            <div id="free-flash-header" style="position: absolute;top: 20px">
                <strong>free flash banner</strong> on <a href="http://www.freenicetemplates.com/free-flash-animation/flash-banner.htm"><strong>free flash banner</strong></a>
                <!--END OF TERMS OF USE-->
                <!-- Add your alternative here -->      
            </div>
        </div>







        </div>
    </body>
</html>

<?php
session_start();
include ('mygymdbConnect.php');
$user_id = $_SESSION['user_id'];
$wrkout = $_POST['workout'];
$query = mysql_query("SELECT  `clt_days` FROM `clt_subscription` WHERE clt_id='$user_id '");

while ($row = mysql_fetch_array($query)) {
    $day = $row['clt_days'];
    if ($day >= 1) {
        $day = $day - 1;
        echo "<div style='position:absolute;top:;left:'><b>You still have $day days of your subscription</b>";
        $query1 = "UPDATE `clt_subscription` SET `clt_days`=$day WHERE `clt_id`=$user_id";
        if (!mysql_query($query1)) {
            die('ERROR:' . mysql_error());
        }
        $query2 = "UPDATE `days` SET `clt_days`=$day WHERE `clt_id`=$user_id";
        if (!mysql_query($query2)) {
        die('ERROR:' . mysql_error());}
            echo ' <div style="position: absolute;top:600px;left: 75px ">';

            $query3 = mysql_query("SELECT  `workout_name` FROM `workout` WHERE `workout_id`='$wrkout'");
            echo "<table border='1' cellspacing='2' cellpadding='2'  style='position: absolute;left: -40px; ' bordercolor='993300' align='center'>";
            echo "<tr>";
            while ($row1 = mysql_fetch_array($query3)) {
                $img_name = $row1['workout_name'];

                echo "<th><img src='images/$img_name' height='250 px' width='250 px'/></th>";
        }
            echo "</tr>";
            echo "</table>";

            echo '</div>';
        
        echo "<script language='javascript'>
        alert('support subscription was  successful!')</script>";
} 
    else {
        echo "<script language='javascript'>alert('you are out of working out days please buy more days')</script>";
        echo " <h3><a href='buypoints.php'>Click here to buy more days</a> </h3>";
}}
    echo '<div id="column2" style="position: absolute;top:1000px;left: 200px ">
                <table width="600px">
                    <th>MY GYM    |    Copyright (c) 2013 MYGYM.com    |    All rights reserved.</th>
                </table>
            </div>';mysql_close($connex);

            ?>
