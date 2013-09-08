<?php
session_start();
include('mygymdbConnect.php');
?>
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
        <div style=" position: absolute; top:600px ;left: 1000px" >









        </div> </head>
</html>
<body>
    <form method="post" name="train" action="trainingdata.php">
        <div align="center" style="position:absolute;top:500px;left:100px">
            <br>
            </br></br></br>
            <table align="center">
                <tr><td>
                        choose your client
                    </td>
                    <td><?php
                        $query = mysql_query("SELECT  * FROM `user`");
                        echo "<select name='clts' id='clts'  >";
                        while ($row = mysql_fetch_array($query)) {
                            $name = $row['user_name'];
                           
                            echo "<option value='$name'>$name </option>";
                        }
                        echo "</select>";
                        ?>
                    </td>
                </tr>
                <tr><td><b>Assign workout for clients</b></td></tr>
                <tr>
                    <td>First workout</td>
                    <td><input type = "text" name = "first" required></input></td>
                </tr>
                <tr>
                    <td>Second workout</td>
                    <td><input type = "text" name = "second" required></input></td>
                </tr>
                <tr>
                    <td>Third workout</td>
                    <td><input type = "text" name = "third" required></input></td>
                </tr> 
                <tr><td><input type="submit"/></td></tr>
            </table>

        </div>



    </form>

</body>