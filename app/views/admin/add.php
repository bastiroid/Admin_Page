<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<h2>Add page</h2>

	<form action="<?php echo BASE_URL; ?>admin/add.php" enctype="multipart/form-data" method="POST" autocomplete="off">
		<label for ="title">
			Title
			<input type="text" name="title" id="title">
		</label>
		<br><br>
		<label for ="s_id">
			Section
			<input type="text" name="s_id" id="s_id">
		</label>
		<br><br>
		<label for ="label">
			Label
			<input type="text" name="label" id="label">
		</label>
		<br><br>
		<label for ="slug">
			Slug
			<input type="text" name="slug" id="slug">
		</label>
		<br><br>
		<label for ="body">
			Body
			<textarea name="body" id="body" cols="30" rows="10"></textarea>
		</label>
		<br><br>
		<label for="tdesc">
			Thumbnail description
			<br><br>
			<input type="text" name="tdesc" id="tdesc">
		</label>
		<br><br>
		Select images to upload:
		<br>
    <input type="file" name="files" multiple />
    <br><br>
		<input type="submit" value="Add">


	</form>	

<?php require VIEW_ROOT . '/templates/footer.php'; ?>