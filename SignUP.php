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
        <div style="position: absolute ;left:  200px; top: 20px;"><img  src="images\header2.jpg" height="200" width="750"
                                                                        /> </div>

        <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         

        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <?php
        $connex = mysql_connect("localhost", "root", "");
        if ($connex == false) {
            die(" could not connect to data base ");
        }
        $select = mysql_select_db("mygym", $connex);
        if (!$select) {
            die("Can\'t use foo : " . mysql_error());
        }

        $Firstname = $_POST["tFName"];
        $Lastname = $_POST["tLName"];
        $Username = $_POST["tUser"];
        $Password = $_POST["tPass1"];
        $Email = $_POST["tEmail"];
        $Weight = $_POST["tWeight"];
        $Gender = $_POST["rbMale"];
        $Country = $_POST["tCountry"];
        $City = $_POST["tCity"];
        $Adress = $_POST["tAddress"];
        $Cart = $_POST["tCart_id"];


        $query1 = " INSERT INTO `user`(`user_name`,`password`) VALUES ('$Username','$Password')
    ";
        if (!mysql_query($query1)) {

            die('Error: ' . mysql_error());
        }
        $query2 = " INSERT INTO  `Days` (  `clt_card_id` ) 
VALUES ('$Cart')";


        if (!mysql_query($query2)) {
            die('Error: ' . mysql_error());
        }


        $query = " INSERT INTO  `clients` (  `clt_card_id` ,  `clt_Fname` ,  `clt_Lname` ,  `clt_email` ,  `clt_adresse` ,  `clt_weight` ,  `clt_gender` ,  `clt_country` ,  `clt_city` , `clt_datesubsc` ,  `clt_pwd` ) 
VALUES (
'$Cart',  '$Firstname',  '$Lastname',  '$Email',  '$Adress',  '$Weight',  '$Gender',  '$Country',  '$City', CURDATE( ) ,  '$Password'
)";


        if (!mysql_query($query)) {
            die('Error:' . mysql_error($connex));
        }


        $user_id = mysql_insert_id();



        $query4 = "INSERT INTO `clt_subscription`( `clt_join_date`) 
     VALUES (curdate())";
        if (!mysql_query($query4)) {
            die('Error:' . mysql_error($connex));
        }
        ?>  


        <div style="position:absolute;top:45%;left:75px"/>
        <h4> " registration successful ! "  </h4>
        <br>

            <b>   <h4>
                    <a href='Home.php'>Click here to go home...</a>

                </h4></b>

            <?
            mysql_close($connex);
            ?>    


