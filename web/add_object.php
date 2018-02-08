<?php
include ("database/pdo.php");

function check_sound(&$string) {
	$sound = pathinfo($string);
	switch($sound['extension']) {
		case "mp3":
		case "mp4":
			return true;
	}
	return false;
}

function check_icon(&$string) {
	$icon = pathinfo($string);
	switch($icon['extension']) {
		case "jpg":
		case "jpeg":
		case "png":
			return true;
	}
	return false;
}

function check_object() {
	for ($i = 1; $i < 2; $i++){
		$sound = $_POST['sound_'.$i];
		$icon = $_POST['icon_'.$i];
		if (check_sound($sound) && check_icon($icon))
			return true;
	}
	return false;
}

if (isset($_POST['sound_1']) && isset($_POST['icon_1'])) {
	if (check_object()) {
		$file = pathinfo($_POST['sound_1']);
		print_r($file);
	}
	else {
		?>
		<script type="text/javascript">
		alert("Fichier(s) invalide(s)");
		window.location.href="../index.php";
		</script>
		<?php
	}
}
else {
	?>
	<script type="text/javascript">
	alert("Formulaire d'envoi non rempli");
	window.location.href="../index.php";
	</script>
	<?php
}

?>
