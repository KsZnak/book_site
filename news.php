<?php include ("head_html.php") ?>
	<link rel="stylesheet" href="style_news.css"/>

		<div align="center">
		<div id="contentform">

<div class ="Send_news">

	<form method="POST">
  <input type="submit" name="form_button" class="fbutton" value= "Форма постинга" />

</input>
</form>

<?php

	if( isset( $_POST['form_button'] ) )
	 {
			 include ("form_news.php");

			 if( isset( $_POST['form_hide'] ) )
		 	 {
		 		 include ("form_news.php");

		 }
}
	?>
</div>
<div class ="feed_news">

<?php include ("feed_news.php");

?>




</div>


		</div>
	</div>
	</body>
