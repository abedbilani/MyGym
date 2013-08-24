
<?php

$connex= mysql_connect("localhost","root","");
if($connex==false){
    die (" could not connect to data base ");
}
$select=  mysql_select_db("mygym",$connex);
        if (!$select) {
    die ("Can\'t use foo : " . mysql_error());
}


?>


