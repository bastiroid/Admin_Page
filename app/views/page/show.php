<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (!$page): ?>
		<p><center>No page found.<center></p>
	<?php else:	?>

		<h2><?php echo escape($page['title']); ?></h2>

		<p><?php echo escape($page['body']); ?></p>

	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>