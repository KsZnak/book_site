<?php
$file_txt =  "./text/$author_name/$book_text" ;
  // посты

echo "
<table>
<tbody>
<td>
<img src= 'image/$author_name/$book_img' />
</td>
<td>
<li><p2>$author_name</p2></li>
<li><p4>$book_name</p4></li>
<li>
<p3>#$section</p3>
<p3>#$genre</p3>
<p3>#$country</p3>
</li>
<li>
<p5><a href='openbook.php?book_id=$book_id'/>[Читать]</a> </p5>
<p5><a href= './text/$author_name/$book_text' download>[.txt]</a> </p5>
<p5><a href= './text_fb2/$author_name/$book_text_fb2' download>[.fb2]</a> </p5>
</li>
<li>

<p8> $date_time</p8>
</li>
</br>
</td>

</tbody>
</table>

  </br></br>";
?>
