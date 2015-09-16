<?php
$con = mysql_connect("sql206.byethost22.com","b22_15688945","9782938024");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("b22_15688945_news2", $con);
echo "connect ho gaya";
$sql="INSERT INTO user_details (email_id,username, password)
VALUES ('$_POST[emailid]','$_POST[username]','$_POST[password]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

//$val = 0.0;  
  
$sqp ="INSERT INTO prediction (username,MNIT_allahabad ,MNIT_Bhopal ,NIT_Kurukshetra ,NIT_Raipur ,NIT_Warangal,NIT_Patna,NIT_Trichy)

VALUES ('$_POST[username]', '0', '0', '0', '0','0','0','0')";

if (!mysql_query($sqp,$con))
{
  die('Error: ' . mysql_error());
}  

$sql1="INSERT INTO user_behaviour (username, NITs, IITs, Technical, Business, Sports, Health, Science, Education,Lifestyle,Entertainment)
VALUES ('$_POST[username]','0','0','0','0','0','0','0','0','0','0')";

if (!mysql_query($sql1,$con))
  {
echo " connect ?? ";
  die('Error: ' . mysql_error());
  }
 echo "connect5"; 


echo "1 record added";
 header( 'Location:http://vishal-ers.byethost22.com/index2.php' ) ;

mysql_close($con);
?> 
