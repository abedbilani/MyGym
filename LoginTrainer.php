
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Open-Air
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120818

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
 session_start();
include('mygymdbConnect.php');

?>
<html>
 <head>
     <title> My Gym</title>
    <div style="position :absolute;top:20px;left:40px">
        <p><h2>MY<br/> 
                GYM 
               <br/></h2></p></div>
          <div style="position: absolute ;left:  200px; top: 20px;"><img  src="images/header2.jpg" height="200" width="750"
                          /> </div>
          <div style="position:absolute;top:37%;left:35%">
      <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         
  
      <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
      <a href="Home.php" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Home |</a>
      <a href="About.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">About |</a>
      <a href="sign up.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Sign up |</a>
      <a href="Activities.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Activities |</a>
      <a href="Trainers.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Trainers |</a>
      <a href="classes.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Classes |</a>
      <a href="Training.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Train |</a>   
 </div>
     
 </head>
     <div style="position: absolute;top:200px;alignment-adjust: central;left: 200px;">
<form method="post" action="trainerlogindata.php">

	
<br>
</br></br></br>
<table cellpadding="7" cellspacing="15">

<tr>
    <td><b style="color: black"> Please insert your User Name</b></td>

            <tr></tr>
		<tr>
		<td><b style="color: black">User</b></td>
			<td>
				<input id="UserName" name="UserName" type="text"maxlength="10"/>
			</td>	
		</tr>
		<tr>
		<td><b style="color: black">Password</b></td>
			<td>
				<input id="Pass" name="Pass" type="password" maxlength="8"/>
			</td>	
		</tr>
	
     <tr>
  <td><input type="submit" value="submit" type="submit"/>
	</td>
	</tr>
    
		  </table>
        </form>

    </div>
</body>
</html>
