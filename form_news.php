
<?php include ("connect.php") ?>



 <form action="post_news.php" method="POST" class="form_action" enctype="multipart/form-data">

  <label>Автор*</label><br>
  <input type="text" name="author_name" placeholder="Толстой Лев Николаевич "  /><br>
  <label>Название книги*</label><br>
  <input type="text" name="book_name" placeholder="Война и Мир" /><br>

  <label>Раздел</label>
<br>
<select name="section" size="1">
  <option value=""></option>
  <option value="Русская классика">Русская классика</option>
  <option value="Русская проза">Русская проза</option>
  <option value="Русская современная проза">Русская фантастика</option>
   <option value="Зарубежная проза">Зарубежная проза</option>
     <option value="Зарубежная фантастика">Зарубежная фантастика</option> </select>
     <br>

     <label>Страна</label><br>
   <select name="country" size="1">
     <option value=""></option>
     <option value="Россия">Россия</option>
     <option value="Испания">Испания</option>
     <option value="Франция">Франция</option>
      <option value="Германия">Германия</option>
        <option value="Япония">Япония</option>
        <option value="Америка">Америка</option>
        <option value="Великобритания">Великобритания</option>
            <option value="Австрия">Австрия</option>
      </select>

        <br>

        <label>Жанр</label><br>
      <select name="genre" size="1">
        <option value=""></option>
        <option value="Русская классика">Русская классика</option>
        <option value="Российская проза">Российская проза</option>
        <option value="Американская проза">Американская проза</option>
         <option value="Фентази">Фентази</option>
           <option value="Фантастика">Фантастика</option>
           <option value="Темное Фентази">Темное Фентази</option>
          <option value="Юмор">Юмор</option>
          <option value="Магический реализм">Магический реализм</option>
          <option value="Антиутопия">Антиутопия</option>
          <option value="Ужасы">Ужасы</option>
          <option value="Киберпанк">Киберпанк</option>
          <option value="Японская проза">Японская проза</option>
          <option value="Философия">Философия</option>
          <option value="Рассказы">Рассказы</option>

         </select>



 <br> <br>




      <label>Обложка</label><br>
   <input type="file" name="book_img" class="browse_button" accept="image/*,image/jpeg/png/jpg/gif">
 <br><br>


      <label>Текстовый файл* txt</label> <br>
     <input type="file" name="book_text" class="browse_button"  accept="text/*,text/txt/*,text/application/msword*">
     <br><br>
     <label>Текстовый файл fb2</label>
    <input type="file" name="book_text_fb2" class="browse_button"  >
     <br>   <br>
  <input type="submit" class="button" value="Отправить" ) >

  </form>

  <form method="POST">

	<input type="submit" class="fbutton" name="hide_button" value="⮝" />
	</input>
	</form>
