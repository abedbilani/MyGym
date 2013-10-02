<?php
session_start();
include 'mygymdbConnect.php';
$Username = $_POST['UserName'];
$Password = $_POST['Pass'];



$result = mysql_query(" SELECT *
FROM  trainer ");

while ($row = mysql_fetch_array($result)) {
    $user = $row['tr_name'];
    $pass = $row['tr_pwd'];
}

if ($user == $Username && $pass == $Password) {
    echo "<div style='position: absolute ;left: 180px; top:300px;' >
        <b>Welcome dear $user </b><br>
          To supervise clients <a href='training.php'>click here</a> 
</div>";
} else {
    echo "<div style='position: absolute ;left: 180px; top:300px;' >
    Invalid user name or password, click  <a href='LoginTrainer.php'>here</a> to go back 
</div>    
";
}
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
<html xmlns="http://www.w3.org/1999/xhtml">

    <html>
        <head>
            <title> MyGym</title>
            <div style="position :absolute;top:20px;left:40px">
                <p><h2>MY<br/> 
                        GYM 
                        <br/></h2></p></div>
            <div style="position: absolute ;left: 180px; top:20px;"><img  src="images\header2.jpg" height="200" width="750"
                                                                          /> </div>
            <div style="position:absolute;top:10%;left:35%">
                <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         

                <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
            </div>

        </head>
    </html>



