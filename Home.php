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
<?php
 session_start();
include('mygymdbConnect.php');

?>
<html>
 <head>
     <title> MyGym</title>
    <div style="position :absolute;top:20px;left:40px">
        <p><h2>MY<br/> 
                GYM 
               <br/></h2></p></div>
          <div style="position: absolute ;left: 180px; top: 340px;"><img  src="images\header2.jpg" height="200" width="750"
                          /> </div>
          <div style="position:absolute;top:37%;left:35%">
      <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         
 
      <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
      <a href="home.php" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Home |</a>
      <a href="About.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">About |</a>
      <a href="sign up.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Sign up |</a>
      <a href="Activities.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Activities |</a>
      <a href="Trainers.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Trainers |</a>
      <a href="classes.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Classes |</a>
      <a href="Training.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Train |</a>   
</div>
 
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="We provide free flash templates, free templates, free flash header"/>
<meta name="keywords" content="free flash buttons, free templates, free flash header"/>
<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript">
		var flashvars = {
		custom_xml_url : "custom.xml"
		};
		var params = {
		bgcolor: "#FFFFFF",
		scale: "noScale"
		};		
		var attributes = {};
		swfobject.embedSWF("flash/header.swf", "free-flash-header","540", "150", "9.0.0", "flash/expressInstall.swf",flashvars, params, attributes);
		</script>
 
 </head>
    <body style="margin: 0;padding: 0" backround="">
      
     
        <div style="position:absolute;top:280px;left:10px">
<FONT  SIZE="4" FACE="courier" COLOR=black><MARQUEE WIDTH=780px BEHAVIOR=SCROLLING scrollamount=2>Welcome To MYGYM,<a href='Sign up.html'>Become a member</a> </MARQUEE></FONT> <p class="one">
        </div>
      <div style="position: absolute;top: 20px;left: 280px">
        <!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
       
        <div id="free-flash-header" >
    	<strong>free flash banner</strong> on <a href="http://www.freenicetemplates.com/free-flash-animation/flash-banner.htm"><strong>free flash banner</strong></a>
    	<!--END OF TERMS OF USE-->
    	<!-- Add your alternative here -->      
    </div>
        </div>
        
        <div style="position:absolute;top:600px;left:100px"\>
</body>
    </html>
<form  action="signinverification.php " method="post">
<?php 
echo"<div style='position:absolute;top:50px;left:50px '>";
echo "<table width='200px'cellpadding='7' cellspacing='10' > <Caption>";

if(isset($_SESSION['user']) and $_SESSION['user']!="" ){
     $_SESSION ['name']=$_SESSION ['user'];
     $name=$_SESSION['user'];
     
    echo " <b>Welcome To MYGYM dear ' $name ' </b> "  ;
   $query10=  mysql_query("SELECT  `user_id` FROM `user` where user_name='$name'");
  
   
   while ($row3 = mysql_fetch_array($query10)) {
       $clt_id = $row3['user_id']; 
      $_SESSION['user_id'];
   }
   
   echo "<b><br> Please remember your ID number:$clt_id</b>";
echo '</div>';}
else{
echo "Connect to benefit from our services";}	
		echo "</caption>";
if(isset($_SESSION['user']) and $_SESSION['user']!="" )
	echo "<form method='post' action='trainbytrainer.php'>
	<input name='user' id='user' type='hidden' value='Username'/>
	<input name='pass'id='pass'type='hidden' value='password'/>
	<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type='submit' value='   Log Out  ' /></td></tr></table>
</table>
<div style='position:absolute;top:100px;left:50px '>
<table cellpadding='100' cellspacing='100'>
<th><a href='bmicalc.php'>Calculate your bmi</a>
<th><a href='workout.php'>Workout</a>
<th><a href='classes.html'>Classes Schedule</a>

<th><a href='trainbytrainer.php'>Workout assigned by Trainer</a>
</div> </form>"
    
    
    
    ;
    
    
else{
echo"
<th>Sign In</th>
<tr>
	<td>
	User
	</td>
	<td>
	<input name='user' id='user' type='text' value='Username'></input>
	</td>
</tr>
<tr>
	<td>
	Password
	</td>
	<td>
	<input name='pass'id='pass'type='password'value='Password'></input></td>
</tr>
<tr>
</table>";
	echo "<input type='submit' value='   Log In' />";
	
	}
?>
</form>
</div>
        
   <div id="footer-content" class="container" style="position: absolute;top:400px;left: 50px ">
	<div id="footer-bg">
            <div id="column5"style="position: absolute;top:-150px;left:220px "><a href="buypoints.php"><h4>Buy days</a></h4></div>
            <div id="column3"style="position: absolute;top:-50px;left: 0px ">
                Useful links<table width="500px" cellpadding="10px" height="250px" align="center">
                    <tr>
                        <td><b><a href="http://www.webmd.com/diet/default.htm">Diet and Weight loss</a></b></td>
                        <td><b><a href="http://www.bodybuilding.com/fun/mma-training-superfeature.htm">MMA Training</a></b></td>
                    </tr>
                    <tr>
                        <td><b><a href="http://www.totallyfreeworkouts.com/">Free body workout</a></b></td>
                        <td><b><a href="http://www.optimumnutrition.com/">Supplements</a></b></td>
                    </tr>        
                </table>
		<div id="column1" style="position: absolute; width: 400px;top:450px;left: 100px">
                       
                        <table cellspacing="10" cellpading="10" align="center">
                            <tr><th> Contact us via social media </th>
                            <th><a href="http://www.facebook.com"><image src="images\fbicon.png" height="35px" width="35px"/></a></th>
                            <th><a href="http://www.youtube.com"><image src="images\yticon.png" height="35px" width="35px"/></a></th>
                            <th><a href="http://www.whatspp.com"><image src="images\wtappicon.jpg" height="35px" width="35px"/></a></th>
                            <th><a href="http://www.gmail.com"><image src="images\gmicon.png" height="35px" width="35px"/></a></th>
                            <th><a href="http://www.twitter.com"><image src="images\twicon.png" height="35px" width="35px"/></a></th>
                            </tr>
                        </table>                             
            </div>
        </div>
   </div>
   </div>
        <div id="column2" style="position: absolute;top:700px;left: 100px ">
            <table width="600px">
                <th>MY GYM    |    Copyright (c) 2013 MYGYM.com    |    All rights reserved.</th>
            </table>	
   </div>
  
