<?php

$connection = mysql_connect("localhost","root","12345678");
$db = mysql_select_db ("bookruan");
mysql_set_charset (utf8);

if(!$connection || !$db)
{
  exit(mysql_error());
  echo 'Ошибка подключения';

}
