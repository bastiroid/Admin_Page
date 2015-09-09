<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<h2>Edit page</h2>

	<form action="<?php echo BASE_URL; ?>admin/edit.php" method="POST" autocomplete="off">
		<label for ="title">
			Title
			<input type="text" name="title" id="title" value="<?php echo escape($card['title']); ?>">
		</label>
		<br><br>
		<label for ="label">
			Label
			<input type="text" name="label" id="label" value="<?php echo escape($card['label']); ?>">
		</label>
		<br><br>
		<label for ="f_id">
			Folder
			<input type="text" name="f_id" id="f_id" value="<?php echo escape($card['f_id']); ?>">
		</label>
		<br><br>
		<label for ="i_id">
			Image
			<input type="text" name="i_id" id="i_id" value="<?php echo escape($card['i_id']); ?>">
		</label>
		<br><br>
		<label for ="slug">
			Slug
			<input type="text" name="slug" id="slug" value="<?php echo escape($card['slug']); ?>">
		</label>
		<br><br>
		<label for ="body">
			Body
		<textarea name="body" id="body" cols="30" rows="10"><?php echo escape($card['body']); ?></textarea>
		</label>
		<br><br>
		<input type="hidden" name="p_id" value="<?php echo escape($card['p_id']); ?>">
		<br><br>
		<input type="submit" value="Edit">

	</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>