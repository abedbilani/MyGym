<?php

session_start();
include ('mygymdbConnect.php');


$user = $_POST["user"];

$pass = $_POST["pass"];
$query = "Select count(*) as  cnt,user_id from  user where user_name='$user' and password='$pass' group by user_id ;";
unset($_SESSION['user']);
unset($_SESSION['isadmin']);

$result = mysql_query($query);
echo mysql_error();

$cnt = 0;
while ($row = mysql_fetch_array($result)) {
    $cnt = $row['cnt'];
    $_SESSION['user_id'] = $row[1];
}
if ($cnt <= 0) {
    if ($user != "") {
        echo "<script language='javaScript'>alert('Invalid user name or password');</script>";
        echo"click  <a href='Home.php'>here</a> to go back to main page";
    }
    else
        echo "You have signed out, click  <a href='Home.php'>here</a> to go back to main page";
}
else {
    if (!mysql_query($query)) {
        die('Error: ' . mysql_error());
    }


    $_SESSION['user'] = $user;
    header('Location:Home.php');

    mysql_close($con);
}
?>