<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<link href="../../view/css/form.view.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Insertion d'un article</title>
		<script	src="../ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<h1>Insertion d'un nouvel article</h1>
		<form action="../../controler/actualite.ctrl.php" method="post" style="width:65%;">
			<textarea name="editeur" id="editeur" rows="8" cols="80"></textarea>
			<br>
			<input type="file" name="image" value="">
			<br>
			<p>
				<input type="submit" value="Ajouter" />
				<input type="reset" value="Annuler" />
				</p>
				<p>
				Retour : <a id="retour" href="../../controler/auth/profilAdmin.ctrl.php"><i class="fas fa-undo"></i></a>
			</p>
		</form>
		<script>
		CKEDITOR.replace('editeur');
		</script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</body>
</html>
