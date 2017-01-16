
<form action="index.php" enctype="multipart/form-data" method="post">
	<select name="gender" id="gender">
		<option value="">Civilitée</option>
		<option value="Mr">Mr</option>
		<option value="Mme">Mme</option>
	</select>
	<label for="first_name">Prenom</label>
	<input name="first_name" type="text">
	<label for="name">Nom</label>
	<input name="name" type="text">
	<label for="file">Fichier</label>
	<input name="file" accept="application/pdf" type="file">
	<button type="submit">Envoyer</button>
</form>
