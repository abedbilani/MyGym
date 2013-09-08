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
<html xmlns="http://www.w3.org/1999/xhtml">
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
            <div style="position: absolute;top: 700px;left: 300px">
                <form action="workoutdata.php" name="work" method="post">
                    <table width="370px" height="100px" cellpadding="10" align="center">
                        <tr>
                            <td><b>Welcome to Training </b><br>
                      
                        <tr><td><b>Choose your workout</b></td>
                            <td><select name="workout">
                                    <option value="1" name="abs">ABS</option>
                                    <option value="2" name="back">Back</option>
                                    <option value="3" name="biceps">Biceps</option>
                                    <option value="4" name="chest">Chest</option>
                                    <option value="5" name="legs">Legs</option>
                                    <option value="6" name="shoulders">Shoulders</option>
                                    <option value="7" name="triceps">Triceps</option>

                                </select></td>

                        </tr>

                        <tr>
                            <td><input type='submit' value='submit'></input></td>

                        </tr>

                    </table>

                </form> 

            </div>
            <div id="column2" style="position: absolute;top:900px;left: 200px ">
                <table width="600px">
                    <th>MY GYM    |    Copyright (c) 2013 MYGYM.com    |    All rights reserved.</th>
                </table>


            </div>

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
            <div style="position: absolute;top: 20px;left: 280px">
                <!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->

                <div id="free-flash-header" >
                    <strong>free flash banner</strong> on <a href="http://www.freenicetemplates.com/free-flash-animation/flash-banner.htm"><strong>free flash banner</strong></a>
                    <!--END OF TERMS OF USE-->
                    <!-- Add your alternative here -->      
                </div>
            </div>
        </body>
    </html>
