<?php  include ("head_html.php") ?>
<link rel="stylesheet" href="style_news.css"/>
 <?php include "connect.php";
 error_reporting(E_ALL);



$author_name = $_POST['author_name'];
$book_name = $_POST['book_name'];
$book_img = $_FILES['book_img']['name'];
$book_text = $_FILES['book_text']['name'];
$book_text_fb2 = $_FILES['book_text_fb2']['name'];
$section = $_POST ['section'];
$country = $_POST ['country'];
$genre = $_POST ['genre'];

/* загрузка из таблицы массивов с именем автора и id
 проверка на уникальность имени автора, присвоение уникального id */

$query_author = mysql_query ("SELECT DISTINCT author_name, author_id FROM books");
while ($row = mysql_fetch_array($query_author)){
$select_author_name = $row['author_name'];
$select_author_id = $row ['author_id'];

if ($select_author_name != $author_name  )
{
$author_id = rand ();
}
else
{
  $author_id = $select_author_id ;
}
}

// перемешщение полученных данных в mysql

$query = mysql_query (
  "INSERT INTO books
  (book_id, author_name, book_name, book_img, book_text, book_text_fb2, section, author_id, country, genre)  VALUES
  (0,'$author_name', '$book_name', '$book_img', '$book_text', '$book_text_fb2', '$section', '$author_id', '$country', '$genre')"
);
//echo(mysql_error());
//var_dump($_POST);
//var_dump($_FILES);

// смена кодировки

$author_name = mb_convert_encoding($author_name, "Windows-1251", "UTF-8");
$book_img = mb_convert_encoding($book_img, "Windows-1251", "UTF-8");
$book_text = mb_convert_encoding($book_text, "Windows-1251", "UTF-8");
$book_text_fb2 = mb_convert_encoding($book_text_fb2, "Windows-1251", "UTF-8");



// пермещение загруженных файлов в папки

$img_tmp = $_FILES ["book_img"] ["tmp_name"];
$img_dir = "./image/$author_name";
if (file_exists($img_dir)) {
move_uploaded_file($img_tmp, "$img_dir/$book_img");
} else {
  mkdir ("$img_dir", 0700);
  move_uploaded_file($img_tmp, "$img_dir/$book_img");
}


$text_conv = $_FILES ["book_text"] ["name"];
mb_detect_encoding($text_conv);
$text_conv = mb_convert_encoding($text_conv, 'Windows-1251', 'UTF-8');;

$text_tmp = $_FILES ["book_text"] ["tmp_name"];
$text_dir = "./text/$author_name";
if (file_exists($text_dir)) {
  move_uploaded_file ($text_tmp, "$text_dir/$book_text");
} else {
  mkdir ("$text_dir", 0700);
  move_uploaded_file ($text_tmp, "$text_dir/$book_text");
}

$text_conv_fb2 = $_FILES ["book_text_fb2"] ["name"];
mb_detect_encoding($text_conv);
$text_conv_fb2 = mb_convert_encoding($text_conv_fb2, 'Windows-1251', 'UTF-8');;

$text_tmp_fb2 = $_FILES ["book_text_fb2"] ["tmp_name"];
$text_dir_fb2 = "./text_fb2/$author_name";
if (file_exists($text_dir_fb2)) {
  move_uploaded_file ($text_tmp_fb2, "$text_dir_fb2/$book_text_fb2");
} else {
  mkdir ("$text_dir_fb2", 0700);
  move_uploaded_file ($text_tmp_fb2, "$text_dir_fb2/$book_text_fb2");
}

echo '<div id ="show_user_news">  Спасибо! <br /> <br /> Новость скоро появится в ленте <br /> <br /> <br /> <br />
 <a href = "news.php"> <p1> вернуться</p1>	 </a></div> ';


?>
