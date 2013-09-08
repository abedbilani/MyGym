<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
//http://www.freecsstemplates.org
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
            <div style="position: absolute ;left: 180px; top: 340px;"><img  src="images\header2.jpg" height="200" width="750"></img>
                                                                             </div>
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
      <!--     <script language="javascipt">
            function getprice() {
                    var type = document.getElementById("subscriptype").selectedIndex;
                    if (type == 0) {
                        document.getElementById("tprice").value = "20$";
                    }
                    if (type == 1) {
                        document.getElementById("tprice").value = "50$";
                    }
                    if (type == 2) {
                        document.getElementById("tprice").value = "150$";
                    }
                }</script><!-->
        </head>      
    </html>

        <body onload="getprice();">

            <div style="position: absolute;top: 650px;left: 100px;">

                <form  action="buydaysdata.php" method="post" name="form1">

                    <table>
                        <tr>
                            <td><b>Choose your subscription </b></td>
                            <td><?php 
                          
                                $query = mysql_query("SELECT `Subscription_type`, `Subscription_name` FROM `subscription_type`");
                                echo "<select name='subscriptype' id='subscriptype' onchange='getprice()' >";
                                while ($row = mysql_fetch_array($query)) {
                                    $id = $row['Subscription_type'];
                                    $name = $row['Subscription_name'];
                                    echo "<option value='$id'>$name </option>";
                                }
                                echo "</select>";
                                ?>
                            </td>

                        </tr>
                        <tr>
                            <td><b>
                                    User id </b>
                            </td>
                            <td><input type="text" id="card_id" name="card_id" required/></td>
                        </tr><tr>
                            <td><b>Number of Days</b>
                            </td>
                            <td><input type="text" name="day" id="day" required>
                                    <script language="javascript">
                if (document.getElementById("day").value = "")
                    alert(' please enter the number of days you want to subscribe')</script>
                                </input></td>
                        </tr>
                       


                        <tr>
                            <td><input type="submit" value="Submit" align="center" onclick="getprice()"/></td>

                        </tr>
                    </table>

                </form>

            </div>
        </body>

  