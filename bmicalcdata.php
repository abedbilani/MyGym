
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



    <div style="position: absolute;top: 600px;left: 50%;">
 <?php
        $weight=$_POST['wheight'];
        $height=$_POST['height'];
        $bmi=$weight/($height*$height);
        
        echo '<h4> Your BMI is</h4>  ' . $bmi ;
     
        ?>
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
</div>