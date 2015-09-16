<?php header("refresh: 1800; url=http://srmhitter9062.byethost7.com/iitq.php"); ?>
<?php


// Inialize session
//session_start();

// Check, if username session is NOT set then this page will jump to login page

$con = mysql_connect("sql304.byethost7.com","b7_15693682","srmalexander20693");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("b7_15693682_srm", $con);

?>


		<?php
		$temp = "IITs";
		
		$result = mysql_query("SELECT distinct title,link,type_news,date FROM news_story where type_news = '$temp' group by title order by date DESC LIMIT 15");
		

		while($row = mysql_fetch_array($result))
		  {
		
		  $link = urlencode($row['link']);
		  $title = $row['title'] ;
		  $catagory = $row['type_news'];
			
		  $date = $row['date'];
		  	$title2 = urlencode($title);
		
		   	echo "<a href='increment.php?x=$link&t=$title2&z=$catagory' target=\"_blank\">$title</a>";
		   
		   	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

			echo "<a href='/rate.php?x=$link&t=$title2&z=$catagory' target=\"_blank\">Rate</a>";
		
			echo "<br />";
		  echo "<br />";
		  }
		  mysql_close($con);
		?>

