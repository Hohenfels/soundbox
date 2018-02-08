<?php
include ('common.php');

page_header();
?>
<form method="post" action="add_object.php">
	<p>Ajoutez les fichiers</p>
	Son (mp3, mp4)
	<input type="file" name="sound_1">
	<br />
	Icone (jpg, jpeg, png)
	<input type="file" name="icon_1">
	</br ></br ></br >
	<input type="submit" value="OK">
</form>
<?php
page_footer();
?>
