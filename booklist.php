<?php include ("head_html.php") ?>
<link rel="stylesheet" href="style_list.css"/>
<div align="center">
		<div id="contentlist">

<?php include ("connect.php");

      parse_str($_SERVER['QUERY_STRING']);
			$result = mysql_query( "SELECT DISTINCT book_name, book_id, book_text FROM books WHERE author_id=" . $author_id);

			mysql_close();

			while ($row = mysql_fetch_array($result)) {


      $book_id=$row['book_id'];
			$book_name=$row['book_name'];


      echo  "<p3><a href=openbook.php?book_id=$book_id> $book_name </a></p3></br></br>";


			?>








			<?php } ?>






		<br/>
	<br/>
</div>
	</div>


	</body>
</html>
