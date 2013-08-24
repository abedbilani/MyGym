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
            <script language="javascipt">
            function getprice(va){
                var x=va;
                var val=document.getElementById("subscriptype");
                if(val===1)
                    
		document.getElementById("tprice").value="20$";
        else 	if(val===2)
		document.getElementById("tprice").value="50$";
	else
	document.getElementById("tprice").value="300$";
            }</script>
        </head>
        <div style="position: absolute;top: 650px;left: 100px;">
            <form  action="buydaysdata.php" method="post">

                <table>
                    <tr>
                        <td>Choose your subscription </td>
                        <td><?php
                            $query = mysql_query("SELECT `Subscription_type`, `Subscription_name` FROM `subscription_type`");
                            echo "<select name='subscriptype' id='subscriptype' onchange='getprice()'>";
                            while($row=  mysql_fetch_array($query)){
                                $id=$row['Subscription_type'];                             
                               $name=$row['Subscription_name'];
                            echo "<option id='$id'>$name days</option>";
                            }
                            echo "</select>";

                            echo "<script >
            function getprice(){
                
var val=document.getElementById('subscriptype').; print val;
 </script>";
                            ?>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Card id  
                        </td>
                        <td><input type="text" id="card_id" name="card_id"/></td>
                    </tr>
                    <tr>
                        <td>
                            Pay using visa
                        </td>
                        <td><input type="text" id="pay" name="pay"/></td>
                    </tr>
                    <tr><td>Price</td>
                        <td><input type="text" readonly="readonly" class="input" name="tprice" id="tprice" value=""/> 
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="buy" align="center"/></td>

                    </tr>
                </table>

            </form>
        </div>


    </html>
