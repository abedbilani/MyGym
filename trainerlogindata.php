<?php
session_start();
include 'mygymdbConnect.php';
$Username=$_POST['UserName'];
$Password=$_POST['Pass'];



$result=mysql_query(" SELECT *
FROM  trainer ");

while ($row=mysql_fetch_array($result))
			{
				$user=$row['tr_name'];
                $pass=$row['tr_pwd'];
}

if ($user==$Username && $pass==$Password)

{
    
    echo " click <a href='sheet.php'>here</a> to go back to sheet page";
}

else {echo "Invalid user name or password, click  <a href='Home.php'>here</a> to go back to Home page" ;


}


	
?>





?>
