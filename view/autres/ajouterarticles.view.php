<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Insertion</title>
		<script	src="../ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<h1>Insertion d'un nouvel article</h1>
		<form action="../../controler/actualite.ctrl.php" method="post">
			<textarea name="editeur" id="editeur" rows="8" cols="80"></textarea>
			<input type="submit" value="envoi">
		</form>
		<script>
		CKEDITOR.replace('editeur');
		</script>
	</body>
</html>
