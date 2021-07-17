<?php include ("head_html.php") ?>

	<body>
	<link rel="stylesheet" href="stylebook.css"/>
		<div id="contentlist">

<?php include ("connect.php");



      parse_str($_SERVER['QUERY_STRING']);
			$result = mysql_query( "SELECT DISTINCT book_text, book_id, author_name FROM books WHERE book_id=" . $book_id);

			mysql_close();

			while ($row = mysql_fetch_array($result)) {

		 $author_name=$row['author_name'];
     $book_id=$row['book_id'];
		 $book_text=$row['book_text'];

		 // смена кодировки

		 $author_name = mb_convert_encoding($author_name, "Windows-1251", "UTF-8");
		$book_text = mb_convert_encoding($book_text, "Windows-1251", "UTF-8");


		 //ссылка на директорию

	$file_txt = file_get_contents ( "./text/$author_name/$book_text" );



if (mb_detect_encoding ($file_txt, "UTF-8", true)) {
	echo ("<p3>" . "<pre>" . $file_txt . "</pre>" . "</p3>");


} else {
	$file_txt= iconv('windows-1251', 'UTF-8', $file_txt);
	echo ("<p3>" . "<pre>" . $file_txt . "</pre>" . "</p3>");
}




      			?>






      		<hr/>

      			<?php } ?>






      		<br/>
      	<br/>

      	</div>


      	</body>
      </html>
