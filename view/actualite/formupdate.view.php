<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<link href="../../view/css/form.view.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Modification d'un article</title>
		<script	src="../ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<h1>Modification d'un article</h1>
		<form action="../../controler/actualite/actualite.ctrl.php?modif=update&idPublication=<?php echo $publication->getIdPublication(); ?>" method="post" style="width:65%;" enctype="multipart/form-data">

			<label for="">Titre de l'article :</label>
			<input type="text" name="title" value="<?php echo $publication->getTitre(); ?>" style="width:60%;"/><br>

			<label for="">Description :</label>
			<textarea name="editeur" id="editeur" rows="8" cols="80"><?php echo $publication->getDescription(); ?></textarea>

			<label for="">Images déjà présentes</label>
			<input type="text" name="content" value="<?php echo $publication->getContent(); ?>">

			<label for="">Ajouter des images</label>
			<input type="file" name="files[]" multiple="multiple" name="submit" accept="image/*" >

			<p>
				<input type="submit" value="Modifier" />
				<input type="reset" value="Annuler" />
				</p>
				<p>
				Retour : <a id="retour" href="../../controler/actualite/tablepublication.ctrl.php"><i class="fas fa-undo"></i></a>
			</p>
		</form>
		<script>
		CKEDITOR.replace('editeur');
		</script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</body>
</html>
