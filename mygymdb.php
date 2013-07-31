
<?php

$connexion=mysql_connect("localhost","Gym","password");
if($connexion==false){
    die (" could not connect to data base ");
}
$select= mysql_select_db("mygym");
if($select==false){
    die (" could not select data base ");
    
}
?>


