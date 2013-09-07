
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

        </head>
    </html>
    <body>
        <div style="position: absolute;top: 650px;left: 100px">
            <form method="post" action="bmicalcdata.php" name="calc">

                <table border="2" cellpadding="10" cellspacing="10" title="bmi"  style="border-color:  black; " align="center">
                    <tr><th><b>Height in (m)</b></th></tr>
                    <tr><td><input type="text" name="height" width="20px"></input></td></tr
                    <tr><th><b>Weight(kg)</b></th></tr>
                    <tr><td><input type="text" name="wheight" width="20px"></input></td></tr>
                    <tr><td><input type="submit" name="submit" value="Submit"></input></td>
                </table>
                <div style="position: absolute;top:0px;left: 200px">
                    <table width="450px" align="center"><tr>
                            The body mass index (BMI),is a measure for human body shape based on an individual's mass and height.
                            it is defined as the individual's body mass divided by the square of their height - with the value universally being given in units of kg/m2.	
                            The bmi calculator is an innovative health and weight calculator that gives you an estimate on where you stand in terms 
                            of your body fat and weight.It does not differentiate between body fat and muscle mass.But,whether your just started
                            or have already in your journey.This calculator will help you understand your body's needs as your body changes 
                            for optimal personal success.
                        </tr>
                        <tr>
                            <table >
                                <tr>
                                <td><h5>BMI Reference Table</h5></td>
                                </tr>
                                <tr>
                                <td><h5>Per the world health organization</h5></td>
                                </tr>
                            </table>
                            <table width="250px" align="center" cellpadding="10" cellspaccing="10" border="2" style="border-color:  black; " align="center">
                                <tr><td>Measure</td>
                                    <td>Evaluation</td>
                                </tr>
                                <tr><td>Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr><td>18.5-24.9</td>
                                    <td>Normal</td>
                                </tr>
                                <tr><td>25-29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr><td>Over 30</td>
                                    <td>Obese</td>
                                </tr>
                            </table>
                        </tr>
                        If you would like a more detailed evaluation of your health, please visit us to conduct
                        the fitness assessment test(FAT)and speak to one of our experts.
                    </table>   
                </div>
            </form>
        </div>
        <div style="position: absolute;top: 1500px;left: 100px">
            <table width="600px">
                <th>MY GYM    |    Copyright (c) 2013 MYGYM.com    |    All rights reserved.</th>
            </table>
        </div>
       
    </body>