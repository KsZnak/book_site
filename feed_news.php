
<?php include ("connect.php");

      $result = mysql_query( "SELECT
      book_id, author_name, book_name, book_img, book_text, book_text_fb2, section, country, genre, date_time FROM books ORDER BY   book_id DESC ");

      mysql_close();

      while ($row = mysql_fetch_array($result)) {


      $book_id=$row['book_id'];
      $author_name=$row['author_name'];
      $author_id=$row['author_id'];
			$book_name=$row['book_name'];
      $book_img=$row['book_img'];
      $section=$row['section'];
      $country=$row['country'];
      $genre=$row['genre'];
      $book_text=$row['book_text'];
      $book_text_fb2=$row['book_text_fb2'];
      $date_time=$row['date_time'];



  include ("feed_show.php");


}

			?>
