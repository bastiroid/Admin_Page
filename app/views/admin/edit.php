<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<h2>Edit page</h2>

	<form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete="off">
		<label for ="title">
			Title
			<input type="text" name="title" id="title" value="<?php echo escape($page['title']); ?>">
		</label>
		<br><br>
		<label for ="label">
			Label
			<input type="text" name="label" id="label" value="<?php echo escape($page['label']); ?>">
		</label>
		<br><br>
		<label for ="slug">
			Slug
			<input type="text" name="slug" id="slug" value="<?php echo escape($page['slug']); ?>">
		</label>
		<br><br>
		<br><br>
		<label for ="body">
			Body
			<textarea name="body" id="body" cols="30" rows="10"><?php echo escape($page['body']); ?></textarea>
		</label>
		<br><br>
		<input type="hidden" name="id" value="<?php echo escape($page['id']); ?>">	
		<br><br>
		<input type="submit" value="Edit">

	</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>