<?php include ("head_html.php") ?>
<link rel="stylesheet" href="style_list.css"/>
<div align="center">
		<div id="contentlist">



<?php include ("connect.php");

echo "<table>";
echo "<tr>";
echo "<td>";

//$result_all = mysql_query( "SELECT count(*)  FROM  books");
//echo $result_all;


$limit_1 = 0;
$limit_2 = 20;
$limit_3 = 2* $limit_2;
$limit_4 = 3* $limit_2 ;

$result = mysql_query( "SELECT DISTINCT author_name, author_id FROM books  ORDER BY author_name LIMIT $limit_1, $limit_2");


			mysql_close();

			while ($row = mysql_fetch_array($result)) {


				$author_id=$row['author_id'];
				$author_name=$row['author_name'];
			echo "



			<li>

			<a href=booklist.php?author_id=$author_id> $author_name</li>  </a> " ;
}

echo "</td>";
echo "<td>";

include ("connect.php");

			$result2 = mysql_query( "SELECT DISTINCT author_name, author_id FROM books  ORDER BY author_name LIMIT $limit_2, $limit_2");


			mysql_close();

			while ($row = mysql_fetch_array($result2)) {


				$author_id=$row['author_id'];
				$author_name=$row['author_name'];
			echo "
			<li>
			<a href=booklist.php?author_id=$author_id>

			$author_name</li> </a>   " ;
}

echo "</td>";
echo "</tr>";
echo "</table>";

			?>















		<br/>
	<br/>

	</div>


	</body>
</html>
