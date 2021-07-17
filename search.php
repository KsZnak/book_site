<?php include ("head_html.php") ?>

<link rel="stylesheet" href="style_news.css"/>
<div align="center">
<div class ="feed_news">
</br></br></br>
<?php include ("connect.php");

$search_query = $_POST['query'];

echo "<p6> По запросу <p7> $search_query </p7> найдено: </p6>";

$result = mysql_query ("SELECT * FROM books  WHERE author_name LIKE '%$search_query%' OR book_name LIKE '%$search_query%'  ");
mysql_close();
while ($row = mysql_fetch_array($result))
{
$author_id=$row['author_id'];
$book_id=$row['book_id'];
$author_name = $row['author_name'];
$book_name= $row ['book_name'];
$section = $row['section'];
$country = $row ['country'];
$genre = $row ['genre'];
$book_img= $row ['book_img'];


?>

</div>

<div class ="feed_show">

<?php include ("feed_show.php");}?>
</div>
</div>
