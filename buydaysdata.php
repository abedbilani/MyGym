<?php
include ('mygymdbConnect.php');
$subsc=$_POST['subscriptype'];
//$user=$_SESSION['clt_days'];
$card=$_POST['card_id'];
$day=$_POST['day'];


$query="UPDATE  `clt_subscription` SET `clt_days`= $day ,
    `clt_subscriptionType_id` =$subsc where`card_id`=$card ";
   
   if(!mysql_query($query)){
       die('ERROR'.mysql_error());
   }?>   
       <div style= "position:absolute;top:250px;left:100px;">
           <form action="Home.php">
         <table>
          <tr><td><b>Price :
</b></td>
                            <td><?php if($subsc==1){ $price=$day*7;
 echo" $price $ ";}
 
if($subsc==2){ $price=$day*5;
 echo" $price $";}

if($subsc==3){ $price=$day*3;
 echo" $price $";}
                   ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>   Pay using visa</b>
                            </td>
                            <td><input type="text" id="pay" name="pay" required /></td>
                        </tr>
             <tr><td><input type="submit" value="buy" ></td></tr>
             
           
         </table><br>
             <br>
                 </form>



</div><?php 
   $query1="UPDATE `Days` SET `clt_days`= $day where`clt_card_id`=$card";
   
   if(!mysql_query($query1)){
       die('ERROR'.mysql_error());
   }
   
   
    header('Home.php');
   
   mysql_close($connex);
    
?>
<html xmlns="http://www.w3.org/1999/xhtml"/>
<html>
    <head>
        <title> MyGym</title>
        <div style="position :absolute;top:20px;left:40px">
            <p><h2>MY<br/> 
                    GYM 
                    <br/></h2></p></div>
       <div style="position: absolute ;left:  200px; top: 20px;"><img  src="images\header2.jpg" height="200" width="750"
                                                                     </div>

        <link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />         

        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    
        
    
    
    </head>
   