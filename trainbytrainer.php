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
            <a href="home.php" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Home |</a>
            <a href="About.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">About |</a>
            <a href="sign up.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Sign up |</a>
            <a href="Activities.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Activities |</a>
            <a href="Trainers.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Trainers |</a>
            <a href="classes.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Classes |</a>
            <a href="Training.html" style="text-decoration: none;color: black;font:serif;font-weight: bold;  ">Train |</a>   
        </div>

    </head>
</html><body>
    <div style="position: absolute;top: 450px;left: 250px">
        <?php
        $x = $_SESSION['name'];
        
        $query = mysql_query(" SELECT *  FROM `clt_wrkout` where user_name='$x'");
     
                 
    

        while ($row = mysql_fetch_array($query)) {
             $st = $row['first'];
             $nd = $row['second'];
             $thrd = $row['third'];
             echo 'your training assigned by the trainer';
             echo "<table cellspacing='30' cellpadding='10'>";
             echo "<tr><td>First workout</td>
                 <td><b>$st</b></td></tr>";
              echo "<tr><td>Second workout</td>
                  <td><b>$nd</b></td></tr>";
               echo "<tr><td>Third workout</td>
                   <td><b>$thrd</b></td></tr>";
               echo "</table>";
                  }
        ?>  
    </div>
</body>


    
