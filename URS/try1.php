<?php// header("refresh: 1800; url=http://srmhitter9062.byethost7.com/try1.php"); ?>
<?php


// Inialize session
//session_start();

// Check, if username session is NOT set then this page will jump to login page
/*if (!isset($_SESSION['username'])) {
        header('Location: index1.php');
}*/

$con = mysql_connect("sql304.byethost7.com","b7_15693682","srmalexander20693");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("b7_15693682_srm", $con);

?>

                <?php
		$result = mysql_query("SELECT title, link,type_news FROM news_story group by title order by date DESC LIMIT 20");
		while($row = mysql_fetch_array($result))
		  {
		  //echo $row['title'] ;
		  $link = urlencode($row['link']);
		  $title = $row['title'] ;
		   
		  $catagory = $row['type_news'];
		   
		 //echo $catagory;
		$title1 = urlencode($title);
		 echo "<a href='increment.php?x=$link&t=$title1&z=$catagory' target=\"_blank\" >$title</a>";
		  
		  echo "<br />";
		  
		  echo "<br />";
		  //echo "<br />";
		  }
		  //mysql_close($con);
mysql_close($con);
?>




